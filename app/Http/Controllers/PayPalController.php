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
        DB::beginTransaction(); // Start transaction

        try {
            $amount = $request->input('amount', 100);
            $program = $request->input('program');
            // Create payment record first
            $payment = Payment::create([
                'first_name' => $request->input('first_name') ?? '***',
                'last_name' => $request->input('last_name') ?? '***',
                'email' => $request->input('email') ?? '***@***.com',
                'type' => 'Donation',
                'program' => $request->program ?? '',
                'amount' => $amount ?? 0,
                'shipment_cost' => 0,
                'isRecurring' => $request->input('is_recurring', false),
                'payment_date' => now(),
                'processed_by' => 'Paypal',
                'status' => 'pending', // Mark as pending until capture
            ]);

            $provider = new PayPalClient;
            $provider->setApiCredentials(config('paypal'));
            $provider->setAccessToken($provider->getAccessToken());

            $response = $provider->createOrder([
                "intent" => "CAPTURE",
                "purchase_units" => [
                    [
                        "amount" => [
                            "currency_code" => "USD",
                            "value" => $amount,
                        ]
                    ]
                ],
                "application_context" => [
                    "return_url" => route('paypal.capture.donation', ['payment_id' => $payment->id]), // Pass payment ID
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

            DB::commit();
            return redirect($approvalUrl); // Redirect user to PayPal

        } catch (Exception $e) {
            DB::rollBack();
            // Log the error in the database
            ErrorLog::create([
                'error_message' => $e->getMessage() ?? 'Unknown error donate PaypalController',
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => 'payment_error',
            ]);

            // Optionally, you can also log the error in Laravel's default log file
            Log::error('Paypal Payment processing error', [
                'message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
            ]);

            return redirect()->route('donationRedirectPayment')->withInput()->with('error', 'PayPal Error: Error to process payment 0568');

        }
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

        try {
            $response = $provider->capturePaymentOrder($request->query('token'));

            Log::info('PayPal Donation Response:', $response);

            if (isset($response['status']) && $response['status'] === 'COMPLETED') {
                $transactionId = $response['id'] ?? 'unknown';

                // Find the correct payment record using payment_id
                $payment = Payment::findOrFail($request->query('payment_id'));
                $payment->update([
                    'status' => 'completed',
                    'transaction_id' => $transactionId
                ]);

                // Send confirmation email
                if (!empty($payment->email)) {
                    try {
                        Mail::to($payment->email)
                            ->cc('administration@aeth.org')
                            ->bcc(['wlsfernandes@aeth.org', 'lzortiz@aeth.org'])
                            ->send(new DonationEmail($payment->email ?? ''));
                    } catch (Exception $e) {
                        Log::error('Failed to send donation email: ' . $e->getMessage());
                    }
                }

                return redirect()->route('gracias', ['text' => 'donation']);
            }

            return redirect()->route('payment')->withErrors('Donation failed. Please try again.');
        } catch (Exception $e) {
            ErrorLog::create([
                'error_message' => $e->getMessage() ?? 'Unknown error captureDonationPayment PaypalController',
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => 'payment_error',
            ]);

            // Optionally, you can also log the error in Laravel's default log file
            Log::error('Paypal Payment processing error', [
                'message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->route('payment')->withErrors('Paypal: An error occurred: ( 0690 ) ');
        }
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
            $message = 'This email is already registered.';
            Session::flash('error', ['email' => $message]);
            return redirect()->route('payment-membership')->withInput()->withErrors(['email' => $message]);
        }

        if ($request->has('young_lideres_membership') && $request->young_lideres_membership === 'true') {
            $young_lider_id = YoungLideres::where('email', $request->email)->value('id');
            if (!$young_lider_id) {
                Session::flash('error', 'To be a participant of the Young Líderes Program, please email mescala@aeth.org.');
                return redirect()->route('payment-membership')->withInput();
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
    public function createMembershipSubscription(Request $request)
    {
        try {
            // Validate input
            $request->validate([
                'email' => 'required|email|unique:users,email',
                'membership_plan' => 'required|string', // student, individual, institutional
                'period' => 'required|string|in:month,year', // month or year
            ]);

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
                        'subscription_id' => '{subscription_id}'
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

    public function handleMembershipPayPalSuccess(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->setAccessToken($provider->getAccessToken());

        $subscriptionId = $request->query('subscription_id');
        $response = $provider->showSubscriptionDetails($subscriptionId);
        Log::info('PayPal Subscription Response:', $response);
        if (!isset($response['status']) || $response['status'] !== 'ACTIVE') {
            throw new Exception('Subscription was not successful.');
        }

        DB::beginTransaction();
        try {
            $password = 'adminAeth2025';

            $user = User::create([
                'name' => $request->query('first_name') . ' ' . $request->query('last_name'),
                'email' => $request->query('email'),
                'password' => Hash::make($password),
            ]);

            $roleId = 17;
            $user->roles()->attach($roleId);
            $is_recurring = true; // make all memberships recurring
            Member::create([
                'user_id' => $user->id,
                'first_name' => $request->query('first_name'),
                'last_name' => $request->query('last_name'),
                'email' => $request->query('email'),
                'membership_plan' => $request->query('membership_plan'),
                'membership_start_date' => now(),
                'membership_end_date' => $is_recurring
                    ? '2099-12-31'
                    : ($request->query('period') == 'year'
                        ? now()->addYear()
                        : now()->addDays(31)),
                'isYear' => $request->query('period') == 'year' ? true : false,
                'status' => 'active',
                'is_recurring' => true,
            ]);

            Payment::create([
                'first_name' => $request->query('first_name') ?? '***',
                'last_name' => $request->query('last_name') ?? '***',
                'email' => $request->query('email') ?? '***@***.com',
                'type' => 'Membership',
                'program' => 'AETH',
                'amount' => $request->query(key: 'amount') ?? 0,
                'shipment_cost' => 0,
                'isRecurring' => true,
                'payment_date' => now(),
                'processed_by' => 'Paypal',
                'tax' => 0,
                'totalAmount' => $request->query(key: 'amount') ?? 0,
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
            Session::flash('success', 'Payment and membership creation successful! Check you mailbox to get your credentials');
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



    /******** OLD Member Payment creating order ID
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
