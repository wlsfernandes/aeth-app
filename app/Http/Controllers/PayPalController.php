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

class PayPalController extends Controller
{
    /**
     * Create a PayPal order for payment.
     */


    public function donate(Request $request)
    {
        DB::beginTransaction(); // Start transaction

        try {
            $amount = $request->input('amount', 100);

            // Create payment record first
            $payment = Payment::create([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'type' => 'donation',
                'amount' => $amount,
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
                Mail::to($payment->email)->send(new DonationEmail($payment->first_name, $payment->email));

                return redirect()->route('payment')->with('success', 'Payment successful.');
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
                'shipment_cost' => $shipmentCost,
                'address_line_1' => $request->input('address_line_1'),
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
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'type' => $request->input('type'),
                'program' => $request->input('program'),
                'amount' => $amount,
                'shipment_cost' => $shipmentCost,
                'isRecurring' => $request->input('is_recurring', false),
                'payment_date' => now(),
                'processed_by' => 'Paypal',
                'tax' => $request->input('taxAmount'),
                'totalAmount' => $totalAmount,
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
     * Capture the payment after user approval.
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

                // Send confirmation email **only now**
                Mail::to($payment->email)->send(new OrderEmail($payment->first_name, $order->order_number, $payment->email));

                return redirect()->route('payment')->with('success', 'Payment successful.');
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

        return $this->captureMembershipPayment($request);
    }

    public function captureMembershipPayment(Request $request)
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

    public function handlePayPalSuccess(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->setAccessToken($provider->getAccessToken());

        $orderId = $request->query('token'); // PayPal returns token as order ID

        $response = $provider->capturePaymentOrder($orderId);

        if (!isset($response['status']) || $response['status'] !== 'COMPLETED') {
            throw new Exception('Payment was not successful.');
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

            Member::create([
                'user_id' => $user->id,
                'first_name' => $request->query('first_name'),
                'last_name' => $request->query('last_name'),
                'email' => $request->query('email'),
                'membership_plan' => $request->query('membership_plan'),
                'membership_start_date' => now(),
                'membership_end_date' => $request->query('period') == 'year' ? now()->addYear() : now()->addDays(31),
                'isYear' => $request->query('period') == 'year',
                'status' => 'active',
            ]);

            Payment::create([
                'first_name' => $request->query('first_name'),
                'last_name' => $request->query('last_name'),
                'email' => $request->query('email'),
                'type' => 'Membership',
                'program' => 'AETH',
                'amount' => $request->query(key: 'amount'),
                'shipment_cost' => 0,
                'isRecurring' => false,
                'payment_date' => now(),
                'processed_by' => 'Paypal',
                'tax' => 0,
                'totalAmount' => $request->query(key: 'amount'),
            ]);

            Mail::to($user->email)->send(new WelcomeEmail($user, $password));

            DB::commit();
            Session::flash('success', 'Payment and membership creation successful! Check you mailbox to get your credentials');
            return redirect()->route('login');
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



    /*public function captureMembershipPayment($request)
    {

        $totalAmount = $request->membership_plan === 'premium' ? '99.99' : '49.99';

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
                "return_url" => route('paypal.capture', ['email' => $request->email]),
                "cancel_url" => route('payment-membership')
            ]
        ]);

        if (!isset($response['id'])) {
            throw new Exception('PayPal order creation failed: ' . json_encode($response));
        }

        $approvalUrl = collect($response['links'])->firstWhere('rel', 'approve')['href'] ?? null;
        if (!$approvalUrl) {
            throw new Exception('Approval URL not found in PayPal response.');
        }

        DB::beginTransaction();
        try {
            $password = 'adminAeth2025';

            $user = User::create([
                'name' => $request->first_name . ' ' . $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($password),
            ]);

            $roleId = 17;
            $user->roles()->attach($roleId);

            Member::create([
                'user_id' => $user->id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'membership_plan' => $request->membership_plan,
                'membership_start_date' => now(),
                'membership_end_date' => $request->period == 'year' ? now()->addYear() : now()->addDays(31),
                'isYear' => $request->period == 'year',
                'status' => 'active',
            ]);

            Mail::to($user->email)->send(new WelcomeEmail($user, $password));

            DB::commit();
            Session::flash('success', 'Payment and membership creation successful!');
            return redirect()->route('login');
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception('User and membership creation failed: ' . $e->getMessage());
        }

    } */

}
