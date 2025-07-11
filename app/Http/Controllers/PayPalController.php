<?php
namespace App\Http\Controllers;

use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Str;
use App\Mail\OrderEmail;
use App\Mail\DonationEmail;

use App\Models\YoungLideres;
use App\Models\Product;
use App\Models\User;
use App\Models\Member;
use App\Models\Payment;
use App\Models\Order;
use App\Models\ErrorLog;
use Exception;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Mail\WelcomeEmail;
use PayPalHttp\HttpException;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
/**
 * Class PayPalController
 *
 * Handles all payment-related operations, including membership payments, bookstore purchases,
 * donations, and tax calculations.
 *
 * @package App\Http\Controllers
 */
class PayPalController extends Controller
{
    /**
     * Handle Donation via Paylpal.
     *
     * This method retrieves all data and
     * passes them to the corresponding Paypal webservice to manage the payment
     * If an error occurs, it logs the error
     * and redirects the user back with an error message.
     *
     * @return *View|RedirectResponse Returns the view with the digital collections if successful,
     *                               otherwise redirects back with an error message.
     */
    public function donate(Request $request)
    {
        $amount = $request->input('amount', 100);
        $program = $request->input('program');

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->setAccessToken($provider->getAccessToken());

        $order = $provider->createOrder([
            'intent' => 'CAPTURE',
            'purchase_units' => [
                [
                    'amount' => [
                        'currency_code' => 'USD',
                        'value' => $amount,
                    ],
                    // Pass anything you need later in custom_id
                    'custom_id' => $program,
                ]
            ],
            'application_context' => [
                'return_url' => route('paypal.capture.donation'),   // PayPal sends ?token=...
                'cancel_url' => route('donationRedirectPayment'),
            ],
        ]);

        $approve = collect($order['links'])->firstWhere('rel', 'approve')['href'] ?? null;
        if (!$approve) {
            return back()->withErrors('Could not start PayPal flow.');
        }

        return redirect($approve);
    }




    /**
     * Capture PayPal donation payment.
     *
     * This method processes a PayPal donation payment by capturing the transaction,
     * updating the payment record, and sending a confirmation email.
     *
     * @param Request $request The incoming HTTP request containing the PayPal token and payment ID.
     * @return *RedirectResponse Redirects to the payment page with success or error messages.
     */
    public function captureDonationPayment(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->setAccessToken($provider->getAccessToken());

        $response = $provider->capturePaymentOrder($request->query('token'));
        Log::info('PayPal Donation Response:', $response);

        if (($response['status'] ?? '') !== 'COMPLETED') {
            return redirect()->route('payment')
                ->withErrors('Donation not completed on PayPal.');
        }

        $capture = data_get($response, 'purchase_units.0.payments.captures.0');
        $payer = $response['payer'] ?? [];

        $data = [
            'first_name' => data_get($payer, 'name.given_name', ''),
            'last_name' => data_get($payer, 'name.surname', ''),
            'email' => $payer['email_address'] ?? '',
            'type' => 'Donation',
            'program' => data_get($response, 'purchase_units.0.payments.captures.0.custom_id', ''),
            'amount' => data_get($capture, 'amount.value', 0),
            'paypal_fee' => data_get($capture, 'seller_receivable_breakdown.paypal_fee.value', 0),
            'paypal_transaction_id' => $capture['id'] ?? '',
            'payment_date' => now(),
            'processed_by' => 'Paypal',
            'status' => 'completed',
        ];

        $payment = Payment::create($data);

        try {
            if ($payment->email) {
                //   Mail::to($payment->email)
                //     ->cc('administration@aeth.org')
                //   ->bcc(['wlsfernandes@aeth.org', 'lzortiz@aeth.org'])
                // ->send(new DonationEmail($payment->email));
            }
        } catch (\Throwable $mailEx) {
            Log::error('Donation e-mail failed: ' . $mailEx->getMessage());
        }

        return redirect()->route('gracias', ['text' => 'donation']);
    }




    /**
     * Handles the creation of a bookstore payment order and initiates PayPal payment processing.
     *
     * This function performs the following steps:
     * 1. Begins a database transaction.
     * 2. Validates and retrieves order data from the request.
     * 3. Calculates total order cost, including product prices, tax, and shipment cost.
     * 4. Checks stock availability and updates product inventory.
     * 5. Creates an order and associates purchased products with it.
     * 6. Creates a payment record and sets its status to "pending".
     * 7. Initiates a PayPal payment request and redirects the user to PayPal for approval.
     * 8. Handles errors by rolling back the transaction and logging the issue.
     *
     * @param Request $request The incoming HTTP request containing order and payment details.
     *
     * @return \Illuminate\Http\RedirectResponse Redirects the user to PayPal for payment approval or back with an error.
     *
     * @throws Exception If there are validation issues, stock shortages, PayPal API errors, or database failures.
     */
    public function createBookstorePayment(Request $request)
    {
        DB::beginTransaction(); // Start transaction

        try {
            $amount = $request->input('amount', 100);
            $shipmentCost = $request->input('hidden_shipment_cost', 0);
            $taxAmount = $request->input('taxAmount', 0);

            $products = $request->input('products', []);
            if (empty($products)) {
                throw new Exception("No products selected for purchase.");
            }

            $total = 0;
            $productQuantities = [];
            foreach ($products as $item) {
                $productId = $item['id'];
                $quantity = $item['quantity'];

                if (!isset($productQuantities[$productId])) {
                    $productQuantities[$productId] = 0;
                }
                $productQuantities[$productId] += $quantity;
            }

            $orderItems = [];
            foreach ($productQuantities as $productId => $quantity) {
                $product = Product::where('id', $productId)->lockForUpdate()->firstOrFail();

                if ($product->stock < $quantity) {
                    throw new Exception("Insufficient stock for product: {$product->name}");
                }

                $total += $product->price * $quantity;

                $orderItems[] = [
                    'product_id' => $product->id,
                    'quantity' => $quantity,
                    'price' => $product->price,
                ];

                $product->decrement('stock', $quantity);
            }

            $totalAmount = number_format($total + $shipmentCost + $taxAmount, 2, '.', '');

            $order = Order::create([
                'order_number' => 'AETH_' . Str::uuid(),
                'customer_name' => $request->input('first_name') . ' ' . $request->input('last_name'),
                'customer_email' => $request->input('email'),
                'total' => $total,
                'super_total' => $totalAmount,
                'shipment_cost' => $shipmentCost ?? 0,
                'tax_amount' => $taxAmount ?? 0,
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'zipcode' => $request->input('zipcode'),
                'status' => 'pending', // Mark order as "pending" until capture
            ]);

            foreach ($orderItems as $orderItem) {
                $order->items()->create($orderItem);
            }

            // Store the pending payment record
            $payment = Payment::create([
                'first_name' => $request->input('first_name') ?? '***',
                'last_name' => $request->input('last_name') ?? '***',
                'email' => $request->input('email') ?? '***@***.com',
                'type' => $request->input('type') ?? '***',
                'program' => $request->input('program') ?? '***',
                'amount' => $totalAmount ?? 0,
                'shipment_cost' => $shipmentCost ?? 0,
                'isRecurring' => $request->input('is_recurring', false),
                'payment_date' => now(),
                'processed_by' => 'Paypal',
                'tax' => $request->input('taxAmount') ?? 0,
                'totalAmount' => $totalAmount ?? 0,
                'status' => 'pending', // Set initial status as "pending"
            ]);

            DB::commit(); // Commit DB changes before calling PayPal API

            $provider = new PayPalClient;
            $provider->setApiCredentials(config('paypal'));
            $provider->setAccessToken($provider->getAccessToken());

            $response = $provider->createOrder([
                "intent" => "CAPTURE",
                "purchase_units" => [
                    [
                        "amount" => [
                            "currency_code" => "USD",
                            "value" => $totalAmount,
                        ]
                    ]
                ],
                "application_context" => [
                    "return_url" => route('paypal.capture', ['order_id' => $order->id, 'payment_id' => $payment->id]),
                    "cancel_url" => route('test.paypal')
                ]
            ]);

            if (!isset($response['id'])) {
                throw new Exception('PayPal order creation failed: ' . json_encode($response));
            }

            $approvalUrl = collect($response['links'])->firstWhere('rel', 'approve')['href'] ?? null;
            if (!$approvalUrl) {
                throw new Exception('Approval URL not found in PayPal response.');
            }

            return redirect($approvalUrl); // Redirect user to PayPal

        } catch (Exception $e) {
            DB::rollBack();
            ErrorLog::create([
                'error_message' => $e->getMessage() ?? 'Unknown error createBookstorePayment PaypalController',
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => 'payment_error',
            ]);

            Log::error('Paypal Payment processing error', [
                'message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()->withErrors('Paypal: Error to process payment ( 0754 )');
        }
    }



    /**
     * Capture and process a PayPal payment.
     *
     * This method retrieves the PayPal payment details using the provided token,
     * verifies the payment status, updates the order and payment records accordingly,
     * and sends a confirmation email to the user if the payment is successful.
     *
     * @param Request $request The HTTP request containing payment details.
     * @return \Illuminate\Http\RedirectResponse Redirects to the payment route with success or error message.
     *
     * @throws \Exception Logs any errors that occur during the payment capture process.
     */

    public function capturePayment(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->setAccessToken($provider->getAccessToken());

        try {
            $response = $provider->capturePaymentOrder($request->query('token'));

            Log::info('PayPal Response:', $response);

            if (isset($response['status']) && $response['status'] === 'COMPLETED') {
                $transactionId = $response['id'] ?? 'unknown';
                $amount = $request->query('amount');
                $currency = 'USD';

                // Retrieve order and payment
                $order = Order::findOrFail($request->query('order_id'));
                $payment = Payment::findOrFail($request->query('payment_id'));

                // Mark payment as completed
                $payment->update(['status' => 'completed']);

                // Update order status
                $order->update(['status' => 'completed']);

                try {   // Send confirmation email **only now**
                    Mail::to($payment->email)->send(new OrderEmail($payment->first_name, $order->order_number, $payment->email));
                } catch (Exception $e) {
                    Log::error('Failed to send order email: ' . $e->getMessage());
                }


                session()->forget(['cart', 'cart_total', 'cart_total_weight', 'cart_count', 'amount', 'weight']);
                return redirect()->route('gracias', ['text' => 'purchase']);
            }

            return redirect()->route('payment')->withErrors('Payment failed. Please try again.');
        } catch (Exception $e) {
            ErrorLog::create([
                'error_message' => $e->getMessage() ?? 'Unknown error capturePayment PaypalController',
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => 'payment_error',
            ]);

            Log::error('Paypal Payment processing error', [
                'message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->route('payment')->withErrors('Paypal: An error occurred: (777)');
        }
    }

    public function membership(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'membership_plan' => 'required|string',
            'period' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('payment-membership')
                ->withInput()
                ->withErrors($validator);
        }

        if ($request->has('young_lideres_membership') && $request->young_lideres_membership === 'true') {
            $young_lider_id = YoungLideres::where('email', $request->email)->value('id');

            if (!$young_lider_id) {
                return redirect()
                    ->route('payment-membership')
                    ->withInput()
                    ->with('error', 'To be a participant of the Young Líderes Program, please email mescala@aeth.org.');
            }

            $request->merge(['young_lider_id' => $young_lider_id]);
        }

        return $this->createMembershipSubscription($request);
    }

    /**
     * Initiates and processes a PayPal membership payment.
     *
     * This method validates the provided amount, creates a PayPal order for membership purchase,
     * and redirects the user to PayPal for payment approval.
     *
     * @param Request $request The HTTP request containing membership payment details.
     * @return \Illuminate\Http\RedirectResponse Redirects the user to PayPal for payment approval.
     *
     * @throws \Exception Throws an exception if the amount is invalid, PayPal order creation fails,
     *                    or the approval URL is not found in the response.
     */
    /**
     * Kick-off a PayPal subscription and save all context in the session.
     */
    public function createMembershipSubscription(Request $request)
    {
        try {
            // ---------------- 1. Pick the plan ----------------
            $plans = $this->resolvePlanIds($request);               // helper below
            $planId = $plans[$request->membership_plan][$request->period]
                ?? throw new Exception('Invalid membership plan or period.');

            // ---------------- 2. Create the subscription ---------------
            $pp = new PayPalClient;
            $pp->setApiCredentials(config('paypal'));
            $pp->setAccessToken($pp->getAccessToken());

            $response = $pp->createSubscription([
                'plan_id' => $planId,
                'subscriber' => ['email_address' => $request->email],
                'application_context' => [
                    'return_url' => route('paypal.capture.membership.success'),
                    'cancel_url' => route('payment-membership'),
                ],
            ]);

            if (empty($response['id'])) {
                throw new Exception('PayPal did not return a subscription ID.');
            }

            // ---------------- 3. Stash everything in session ------------
            session([
                'membership_context' => array_merge(
                    $request->only([
                        'amount',
                        'email',
                        'first_name',
                        'last_name',
                        'membership_plan',
                        'period',
                        'young_lider_id'
                    ]),
                    ['paypal_subscription_id' => $response['id']]
                )
            ]);

            // ---------------- 4. Redirect for buyer approval ------------
            $approvalUrl = collect($response['links'])
                ->firstWhere('rel', 'approve')['href'] ?? null;
            if (!$approvalUrl) {
                throw new Exception('Approval URL missing from PayPal response.');
            }

            return redirect()->away($approvalUrl);

        } catch (Exception $e) {
            Log::error('PayPal createSubscription error', [
                'msg' => $e->getMessage(),
                'file' => $e->getFile() . ':' . $e->getLine()
            ]);
            return back()->with('error', 'Unable to start PayPal subscription.');
        }
    }





    /**
     * Handles the PayPal payment success and processes user membership creation.
     *
     * This method captures the PayPal payment, creates a new user account, assigns a membership role,
     * registers the user as a member, logs the payment, and sends a welcome email with login credentials.
     *
     * @param Request $request The HTTP request containing payment and user details.
     * @return \Illuminate\Http\RedirectResponse Redirects to login upon success or back to memberships on failure.
     *
     * @throws \Exception Throws an exception if the payment is not successful or any database operation fails.
     */
    /**
     * PayPal returns here after buyer approval.
     * We pull the real subscription ID and our stored context.
     */
    public function handleMembershipPayPalSuccess(Request $request)
    {
        try {
            // -------- 1. Pull context + the subscription ID -------------
            $ctx = session('membership_context');
            session()->forget('membership_context');          // tidy up

            if (!$ctx || empty($ctx['paypal_subscription_id'])) {
                throw new Exception('Session expired – membership context missing.');
            }
            $subscriptionId = $ctx['paypal_subscription_id'];

            // -------- 2. Confirm subscription is really ACTIVE ----------
            $pp = new PayPalClient;
            $pp->setApiCredentials(config('paypal'));
            $pp->setAccessToken($pp->getAccessToken());

            $sub = json_decode(
                json_encode($pp->showSubscriptionDetails($subscriptionId)),
                true
            );
            if (($sub['status'] ?? null) !== 'ACTIVE') {
                throw new Exception('Subscription is not active. Status: ' . ($sub['status'] ?? 'unknown'));
            }

            // -------- 3. Persist user / member / payment ----------------
            DB::beginTransaction();

            $password = Str::random(12);
            $user = User::create([
                'name' => "{$ctx['first_name']} {$ctx['last_name']}",
                'email' => $ctx['email'],
                'password' => Hash::make($password),
            ]);
            $user->roles()->attach(17);                       // member role

            Member::create([
                'user_id' => $user->id,
                'first_name' => $ctx['first_name'],
                'last_name' => $ctx['last_name'],
                'email' => $ctx['email'],
                'membership_plan' => $ctx['membership_plan'],
                'membership_start_date' => now(),
                'membership_end_date' => '2099-12-31',
                'isYear' => $ctx['period'] === 'year',
                'status' => 'active',
                'is_recurring' => true,
                'paypal_subscription_id' => $subscriptionId,
            ]);

            Payment::create([
                'first_name' => $ctx['first_name'],
                'last_name' => $ctx['last_name'],
                'email' => $ctx['email'],
                'type' => 'Membership',
                'program' => 'AETH',
                'amount' => $ctx['amount'],
                'isRecurring' => true,
                'payment_date' => now(),
                'processed_by' => 'PayPal',
                'totalAmount' => $ctx['amount'],
            ]);

            if (!empty($ctx['young_lider_id'])) {
                YoungLideres::where('id', $ctx['young_lider_id'])
                    ->update(['young_lideres_membership' => true]);
            }

            Mail::to($user->email)->send(new WelcomeEmail($user, $password));

            DB::commit();
            return redirect()->route('thankYouMember')
                ->with('success', 'Membership created! Check your email.');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('PayPal success handler error', [
                'msg' => $e->getMessage(),
                'file' => $e->getFile() . ':' . $e->getLine()
            ]);
            return redirect()->route('memberships')
                ->with('error', 'Payment confirmed but we hit a problem. Please contact support.');
        }
    }



    private function resolvePlanIds(Request $request): array
    {
        if ($request->boolean('young_lideres_membership')) {
            return [
                'Student' => [
                    'month' => env('PAYPAL_YOUNG_LIDERES'),
                    'year' => env('PAYPAL_YOUNG_LIDERES'),
                ],
            ];
        }

        return [
            'Student' => [
                'month' => env('PAYPAL_STUDENT_MONTHLY'),
                'year' => env('PAYPAL_STUDENT_YEARLY'),
            ],
            'Individual' => [
                'month' => env('PAYPAL_INDIVIDUAL_MONTHLY'),
                'year' => env('PAYPAL_INDIVIDUAL_YEARLY'),
            ],
            'Institutional' => [
                'month' => env('PAYPAL_INSTITUTIONAL_MONTHLY'),
                'year' => env('PAYPAL_INSTITUTIONAL_YEARLY'),
            ],
        ];
    }


    /******** OLD Member Payment creating order ID
     * 
     * 
     *     public function createMembershipSubscription(Request $request)
    {
        try {
            // Define the plan IDs dynamically
            $plans = [];
            if ($request->boolean('young_lideres_membership')) {
                // Special plan for Young Líderes
                $plans['Student'] = [
                    'month' => env('PAYPAL_YOUNG_LIDERES'),
                    'year' => env('PAYPAL_YOUNG_LIDERES'),
                ];
            } else {
                // Standard membership plans
                $plans = [
                    'Student' => [
                        'month' => env('PAYPAL_STUDENT_MONTHLY'),
                        'year' => env('PAYPAL_STUDENT_YEARLY'),
                    ],
                    'Individual' => [
                        'month' => env('PAYPAL_INDIVIDUAL_MONTHLY'),
                        'year' => env('PAYPAL_INDIVIDUAL_YEARLY'),
                    ],
                    'Institutional' => [
                        'month' => env('PAYPAL_INSTITUTIONAL_MONTHLY'),
                        'year' => env('PAYPAL_INSTITUTIONAL_YEARLY'),
                    ],
                ];
            }
            // Check if membership plan & period exist
            if (!isset($plans[$request->membership_plan][$request->period])) {
                throw new Exception('Invalid membership plan or period.');
            }
            // Assign the correct PayPal Plan ID
            $plan_id = $plans[$request->membership_plan][$request->period];
            // Initialize PayPal Client
            $provider = new PayPalClient;
            $provider->setApiCredentials(config('paypal'));
            $provider->setAccessToken($provider->getAccessToken());
            // Create Subscription
            $response = $provider->createSubscription([
                "plan_id" => $plan_id,
                "subscriber" => [
                    "email_address" => $request->email
                ],
                "application_context" => [
                    "return_url" => route('paypal.capture.membership.success', [
                        'amount' => $request->amount,
                        'email' => $request->email,
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'membership_plan' => $request->membership_plan,
                        'period' => $request->period,
                        'young_lider_id' => $request->young_lider_id ?? null,
                    ]),
                    "cancel_url" => route('payment-membership')
                ]
            ]);
            if (!isset($response['id'])) {
                throw new Exception('Failed to create PayPal subscription. Debug Info: ' . json_encode($response));
            }
            $subscriptionId = $response['id'];
            $approvalUrl = collect($response['links'])->firstWhere('rel', 'approve')['href'] ?? null;
            if (!$approvalUrl) {
                throw new Exception('Approval URL not found in PayPal response.');
            }
            // Redirect the user to PayPal for approval
            return redirect()->away($approvalUrl);
        } catch (Exception $e) {
            // Log error details
            ErrorLog::create([
                'error_message' => $e->getMessage() ?? 'Unknown error in createMembershipSubscription',
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => 'payment_error',
            ]);

            Log::error('PayPal Payment processing error', [
                'message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->route('memberships')->withInput()->with('error', 'User and membership creation failed: (0189)');
        }
    }

     * 
     *    public function handleMembershipPayPalSuccess(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->setAccessToken($provider->getAccessToken());

        try {
            $subscriptionId = $request->query('subscription_id')           // live REST
                ?? $request->query('token')                    // sandbox REST
                ?? $request->query('ba_token');                // smart buttons

            if (!$subscriptionId) {
                Log::error('PayPal callback missing subscription identifier', ['query' => $request->all()]);
                throw new Exception('Unable to locate PayPal subscription identifier in callback.');
            }

            $response = $provider->showSubscriptionDetails($subscriptionId);
            $response = json_decode(json_encode($response), true);
            Log::info('PayPal Subscription Response:', $response);

            if (!isset($response['status']) || $response['status'] !== 'ACTIVE') {
                throw new Exception('Subscription is not active. Current status: ' . ($response['status'] ?? 'unknown'));
            }

            DB::beginTransaction();

            $password = 'adminAeth2025';

            $user = User::create([
                'name' => $request->query('first_name') . ' ' . $request->query('last_name'),
                'email' => $request->query('email'),
                'password' => Hash::make($password),
            ]);

            $roleId = 17;
            $user->roles()->attach($roleId);

            $is_recurring = true;

            Member::create([
                'user_id' => $user->id,
                'first_name' => $request->query('first_name'),
                'last_name' => $request->query('last_name'),
                'email' => $request->query('email'),
                'membership_plan' => $request->query('membership_plan'),
                'membership_start_date' => now(),
                'membership_end_date' => $is_recurring
                    ? '2099-12-31'
                    : ($request->query('period') === 'year'
                        ? now()->addYear()
                        : now()->addDays(31)),
                'isYear' => $request->query('period') === 'year',
                'status' => 'active',
                'is_recurring' => true,
            ]);

            Payment::create([
                'first_name' => $request->query('first_name') ?? '***',
                'last_name' => $request->query('last_name') ?? '***',
                'email' => $request->query('email') ?? '***@***.com',
                'type' => 'Membership',
                'program' => 'AETH',
                'amount' => $request->query('amount') ?? 0,
                'shipment_cost' => 0,
                'isRecurring' => true,
                'payment_date' => now(),
                'processed_by' => 'Paypal',
                'tax' => 0,
                'totalAmount' => $request->query('amount') ?? 0,
            ]);

            if ($request->query('young_lider_id')) {
                $youngLider = YoungLideres::find($request->query('young_lider_id'));
                if ($youngLider) {
                    $youngLider->update(['young_lideres_membership' => true]);
                }
            }

            try {
                Mail::to($user->email)->send(new WelcomeEmail($user, $password));
            } catch (Exception $e) {
                Log::error('Failed to send welcome email: ' . $e->getMessage());
            }

            DB::commit();
            Session::flash('success', 'Payment and membership creation successful! Check your mailbox for credentials.');
            return redirect()->route('thankYouMember');
        } catch (Exception $e) {
            DB::rollBack();

            ErrorLog::create([
                'error_message' => $e->getMessage() ?? 'Unknown error handlePayPalSuccess PaypalController',
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => 'payment_error',
            ]);

            Log::error('Paypal Payment processing error', [
                'message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
            ]);

            return redirect()->route('memberships')->withInput()->with('error', 'User and membership creation failed:(0153) ');
        }
    }




     * public function captureMembershipPayment(Request $request)
        {
            $totalAmount = (float) $request->input('amount');
            if ($totalAmount <= 0) {
                throw new Exception('Invalid amount: must be greater than zero.');
            }
            $totalAmount = number_format($totalAmount, 2, '.', '');
            $provider = new PayPalClient;
            $provider->setApiCredentials(config('paypal'));
            $provider->setAccessToken($provider->getAccessToken());
            $response = $provider->createOrder([
                "intent" => "CAPTURE",
                "purchase_units" => [
                    [
                        "amount" => [
                            "currency_code" => "USD",
                            "value" => $totalAmount,
                        ]
                    ]
                ],
                "application_context" => [
                    "return_url" => route('paypal.capture.membership.success', [
                        'email' => $request->email,
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'membership_plan' => $request->membership_plan,
                        'period' => $request->period,
                        'amount' => $totalAmount,
                    ]),
                ]
            ]);

            if (!isset($response['id'])) {
                throw new Exception('PayPal order creation failed: ' . json_encode($response));
            }

            $approvalUrl = collect($response['links'])->firstWhere('rel', 'approve')['href'] ?? null;
            if (!$approvalUrl) {
                throw new Exception('Approval URL not found in PayPal response.');
            }

            // Redirect the user to PayPal for approval
            return redirect()->away($approvalUrl);
        }
     */

}
