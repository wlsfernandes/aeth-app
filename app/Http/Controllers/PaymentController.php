<?php
namespace App\Http\Controllers;

use Stripe\PaymentIntent;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Subscription;
use Stripe\Exception\ApiErrorException;

use App\Mail\WelcomeEmail;
use App\Mail\OrderEmail;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\ErrorLog;
use App\Models\Payment;
use App\Models\Member;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;


use Session;
use Exception;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        $amount = session('amount');
        return view('pages.payments.payment', compact('amount'));
    }

    public function showMembershipPaymentForm()
    {
        $amount = session('amount');
        return view('pages.payment-membership', compact('amount'));
    }




    public function donationRedirectPayment(Request $request)
    {
        $amount = $request->input('donate-amount', 0);
        $customAmount = $request->input('custom-amount');
        $type = $request->input('type', '');
        $program = $request->input('program', '');


        if (!empty($customAmount) && $customAmount > 0) {
            $amount = $customAmount;
        }
        return view('pages.payments.payment', compact('amount', 'type', 'program'));

    }

    public function redirectContactPayment(Request $request)
    {
        $amount = $request->input('amount', 0);
        $weight = $request->input('weight', 0);
        $minimumWeight = 0.1; // Default weight in pounds
        $weight = $weight > 0 ? $weight : $minimumWeight;
        session(['amount' => $amount]);
        session(['weight' => $weight]);
        $cartItems = session('cart', []);
        $type = 'bookstore';
        $program = 'AETH';
        return view('pages.payments.contact-payment', compact('amount', 'type', 'program', 'cartItems', 'weight'));
    }


    public function redirectCreditPayment(Request $request)
    {
        $amount = $request->input('amount', 0);
        $shipment_cost = $request->input('hidden_shipment_cost', 0);
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        session(['amount' => $amount]);
        $cartItems = session('cart', []);
        return view('pages.payments.credit-payment', compact('amount', 'cartItems', 'shipment_cost', 'first_name', 'last_name', 'email'));
    }

    public function redirectCartPayment(Request $request)
    {
        $amount = $request->input('amount', 0);
        $weight = $request->input('weight', 0);
        $minimumWeight = 0.1; // Default weight in pounds
        $weight = $weight > 0 ? $weight : $minimumWeight;
        session(['amount' => $amount]);
        session(['weight' => $weight]);
        $cartItems = session('cart', []);
        $type = 'bookstore';
        $program = 'AETH';
        return view('pages.payments.cart-payment', compact('amount', 'type', 'program', 'cartItems', 'weight'));
    }



    public function handleRedirect(Request $request)
    {
        $amount = $request->input('donate-amount', 0);
        $customAmount = $request->input('custom-amount');

        if (!empty($customAmount) && $customAmount > 0) {
            $amount = $customAmount;
        }

        if ($amount <= 0) {
            return redirect()->back()->with('error', 'Please enter a valid donation amount.');
        }

        return redirect()->route('payment')->with('amount', $amount);
    }

    public function handlePayment(Request $request)
    {
        try {
            $paymentResult = $this->_processPayment($request);

            if ($paymentResult['status'] === 'success') {
                Session::flash('success', 'Payment successful!');
                return redirect()->route('payment');
            } elseif ($paymentResult['status'] === 'requires_action') {
                return response()->json([
                    'requires_action' => true,
                    'payment_intent_client_secret' => $paymentResult['client_secret'],
                ]);
            } elseif ($paymentResult['status'] === 'error') {
                Session::flash('error', $paymentResult['message']);
                return redirect()->route('payment');
            }
        } catch (Exception $e) {
            // Log the error in the database
            ErrorLog::create([
                'error_message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => 'payment_error', // Customize error code if necessary
            ]);

            // Optionally, you can also log the error in Laravel's default log file
            Log::error('Payment processing error', [
                'message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
            ]);

            // Flash error to session
            Session::flash('error', 'An error occurred during the payment process.');
            return redirect()->route('payment');
        }
    }
    public function handleDonation(Request $request)
    {
        try {
            $donationResult = $this->_processPayment($request);

            if ($donationResult['status'] === 'success') {
                if (isset($donationResult['subscription_id'])) {
                    Session::flash('success', 'Thank you for your monthly recurring donation!');
                } else {
                    Session::flash('success', 'Thank you for your generous donation!');
                }
                return redirect()->route('payment');
            } elseif ($donationResult['status'] === 'requires_action') {
                return response()->json([
                    'requires_action' => true,
                    'payment_intent_client_secret' => $donationResult['payment_intent_client_secret'],
                ]);
            } elseif ($donationResult['status'] === 'error') {
                Session::flash('error', $donationResult['message']);
                return redirect()->route('payment');
            }
        } catch (Exception $e) {
            // Log the error in the database
            ErrorLog::create([
                'error_message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => 'donation_error', // Customize error code if necessary
            ]);

            // Optionally, you can also log the error in Laravel's default log file
            Log::error('Donation processing error', [
                'message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
            ]);

            // Flash error to session
            Session::flash('error', 'An error occurred during the donation process.');
            return redirect()->route('payment');
        }
    }

    public function handleMembershipPayment(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
        ]);

        if ($validator->fails()) {
            $message = 'This email is already registered.';

            Session::flash('error', ['email' => $message]);
            return redirect()->route('payment-membership')->withInput()->withErrors(['email' => $message]);
        }

        DB::beginTransaction();

        try {
            $paymentResult = $this->_processPayment($request);

            if ($paymentResult['status'] === 'success') {
                $paymentRecord = $paymentResult['paymentRecord'];
                // $password = Str::random(10);
                $password = 'adminAeth2025'; // required to change in first login
                $user = User::create([
                    'name' => $paymentRecord->first_name . ' ' . $paymentRecord->last_name,
                    'email' => $paymentRecord->email,
                    'password' => Hash::make($password),
                ]);
                // Assign the role to the user
                $roleId = 17;
                $user->roles()->attach($roleId);
                Member::create([
                    'user_id' => $user->id,
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $paymentRecord->email,
                    'membership_plan' => $request->membership_plan,
                    'membership_start_date' => now(),
                    'membership_end_date' => $request->period == 'year' ? now()->addYear() : now()->addDays(31),
                    'isYear' => $request->period == 'year' ? true : false,
                    'status' => 'active',
                ]);
                $request->period;
                Mail::to($user->email)->send(new WelcomeEmail($user, $password));
                DB::commit();
                Session::flash('success', 'Payment and membership creation successful!');
                return redirect()->route('login');
            } elseif ($paymentResult['status'] === 'error') {
                DB::rollBack();
                ErrorLog::create([
                    'error_message' => $paymentResult['message'],
                    'stack_trace' => 'payment result error ',
                    'error_code' => 'payment_processing_error',
                ]);
                Session::flash('error', $paymentResult['message']);
                return redirect()->route('payment-membership');
            }

        } catch (Exception $e) {
            DB::rollBack();
            ErrorLog::create([
                'error_message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => '02 - Membership Payment Error',
            ]);
            Session::flash('error', 'An error occurred during the payment process.');
            return redirect()->route('payment');
        }
    }

    public function handleMembershipRenewPayment(Request $request)
    {

        DB::beginTransaction();

        try {
            $paymentResult = $this->_processPayment($request);

            if ($paymentResult['status'] === 'success') {
                $paymentRecord = $paymentResult['paymentRecord'];

                $user = User::where('email', $paymentRecord->email)->first();

                if ($user) {
                    Member::updateOrCreate(
                        ['user_id' => $user->id],
                        [
                            'email' => $paymentRecord->email,
                            'membership_plan' => $request->membership_plan,
                            'membership_end_date' => $request->period == 'year' ? now()->addYear() : now()->addDays(31),
                            'isYear' => $request->period == 'year' ? true : false,
                            'status' => 'active',
                        ]
                    );
                }
                DB::commit();
                Session::flash('success', 'Congratulations ! The operation was successful!');
                return redirect()->route('login');

            } elseif ($paymentResult['status'] === 'error') {
                DB::rollBack();
                ErrorLog::create([
                    'error_message' => $paymentResult['message'],
                    'stack_trace' => 'payment result error ',
                    'error_code' => 'payment_processing_error',
                ]);
                Session::flash('error', $paymentResult['message']);
                return redirect()->route('payment-membership');
            }

        } catch (Exception $e) {
            DB::rollBack();
            ErrorLog::create([
                'error_message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => '02 - Membership Payment Error',
            ]);
            Session::flash('error', 'An error occurred during the payment process.');
            return redirect()->route('payment');
        }
    }


    public function cartPayment(Request $request)
    {
        DB::beginTransaction();

        try {
            $shipmentCost = $request->input('hidden_shipment_cost') ?? 0;
            $address = $request->input('address');
            $address_complement = $request->input('address_complement');
            $city = $request->input('city');
            $state = $request->input('state');
            $zipcode = $request->input('zipcode');

            // Retrieve the payment method
            $paymentMethodId = $request->input('payment_method_id');

            // Process the payment
            $paymentResult = $this->_processPayment($request);

            if ($paymentResult['status'] !== 'success') {
                throw new Exception($paymentResult['message'], 400);
            }

            $paymentRecord = $paymentResult['paymentRecord'];

            // Calculate the total and group quantities for each product
            $total = 0;
            $productQuantities = [];
            foreach ($request->input('products', []) as $item) {
                if (!isset($productQuantities[$item['id']])) {
                    $productQuantities[$item['id']] = 0;
                }
                $productQuantities[$item['id']] += $item['quantity'];
            }

            // Validate stock and prepare order items
            $orderItems = [];
            foreach ($productQuantities as $productId => $quantity) {
                $product = Product::findOrFail($productId);

                // Check if the requested total quantity is available in stock
                if ($product->stock < $quantity) {
                    throw new Exception("Insufficient stock for product: {$product->name}");
                }

                $total += $product->price * $quantity;

                $orderItems[] = [
                    'product_id' => $product->id,
                    'quantity' => $quantity,
                    'price' => $product->price,
                ];

                // Decrement the stock for the product
                $product->decrement('stock', $quantity);
            }

            // Create the order
            $order = Order::create([
                'order_number' => 'AETH_' . Str::uuid(),
                'customer_name' => $paymentRecord->first_name . ' ' . $paymentRecord->last_name,
                'customer_email' => $paymentRecord->email,
                'total' => $total,
                'shipment_cost' => $shipmentCost,
                'address' => $address,
                'address_complement' => $address_complement,
                'city' => $city,
                'state' => $state,
                'zipcode' => $zipcode,
            ]);

            // Save order items
            foreach ($orderItems as $orderItem) {
                $order->items()->create($orderItem);
            }

            // Send confirmation email
            Mail::to($paymentRecord->email)->send(new OrderEmail($paymentRecord, $order->order_number));

            DB::commit();
            session()->forget('cart');
            session()->flash('success', 'Your payment was processed successfully!');
            return redirect()->route('bookstore');
        } catch (Exception $e) {
            DB::rollBack();

            ErrorLog::create([
                'error_message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => '03 - Bookstore Payment Error',
            ]);

            session()->flash('error', $e->getMessage());
            return redirect()->route('bookstore');
        }
    }


    /*
        public function _processPayment(Request $request)
        {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            try {

                $amount = $request->input('amount');
                $shipmentCost = $request->input('hidden_shipment_cost') ?? 0;
                $totalAmount = $amount + $shipmentCost;
                $totalAmountInCents = $totalAmount * 100;

                // Create a PaymentIntent
                $paymentIntent = PaymentIntent::create([
                    "amount" => $totalAmountInCents, // Convert dollars to cents
                    "currency" => "usd",
                    "payment_method" => $request->payment_method_id,
                    "confirmation_method" => "manual",
                    "confirm" => true,
                    "return_url" => route('payment.callback'), // Return URL after 3D Secure
                ]);

                // Check if the payment requires additional actions
                if ($paymentIntent->status === 'requires_action' || $paymentIntent->status === 'requires_source_action') {
                    return response()->json([
                        'requires_action' => true,
                        'payment_intent_client_secret' => $paymentIntent->client_secret,
                    ]);
                }

                // Check if the payment succeeded
                if ($paymentIntent->status === 'succeeded') {
                    // Create a new payment record
                    $receiptUrl = null;
                    if (isset($paymentIntent->charges->data) && count($paymentIntent->charges->data) > 0) {
                        $receiptUrl = $paymentIntent->charges->data[0]->receipt_url;
                    }

                    $paymentRecord = Payment::create([
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'email' => $request->email,
                        'type' => $request->type,
                        'program' => $request->program,
                        'amount' => $request->amount,
                        'shipment_cost' => $request->hidden_shipment_cost ?? 0,
                        'currency' => $paymentIntent->currency,
                        'payment_method_id' => $paymentIntent->payment_method,
                        'status' => $paymentIntent->status,
                        'stripe_payment_intent_id' => $paymentIntent->id,
                        'receipt_url' => $receiptUrl,
                        'customer_id' => $paymentIntent->customer,
                        'payment_date' => now(),
                    ]);

                    return ['status' => 'success', 'paymentRecord' => $paymentRecord];
                }

            } catch (Exception $e) {
                ErrorLog::create([
                    'error_message' => $e->getMessage(),
                    'stack_trace' => $e->getTraceAsString(),
                    'error_code' => '01 - Stripe _processPayment',
                ]);
                return ['status' => 'error', 'message' => $e->getMessage()];
            }
        }
    */

    public function paymentCallback(Request $request)
    {
        // Handle the callback after Stripe redirects back to your app
        Session::flash('success', 'Payment completed!');
        return redirect()->route('payment.form');
    }
    public function _processPayment(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $amount = $request->input('amount');
            $shipmentCost = $request->input('hidden_shipment_cost') ?? 0;
            $totalAmount = $amount + $shipmentCost;
            $totalAmountInCents = $totalAmount * 100;

            $paymentData = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'type' => $request->type,
                'program' => $request->program,
                'amount' => $amount,
                'shipment_cost' => $shipmentCost,
                'isRecurring' => $request->is_recurring ?? false,
                'payment_date' => now(),
            ];

            if ($request->is_recurring) {
                // Create or retrieve a customer
                $customer = Customer::create([
                    'email' => $request->email,
                    'name' => $request->first_name . ' ' . $request->last_name,
                    'payment_method' => $request->payment_method_id,
                    'invoice_settings' => [
                        'default_payment_method' => $request->payment_method_id,
                    ],
                ]);

                // Dynamically create a Price object with custom amount
                $price = \Stripe\Price::create([
                    'unit_amount' => $totalAmountInCents,
                    'currency' => 'usd',
                    'recurring' => ['interval' => 'month'],
                    'product' => 'prod_Rd0XFvJV9PsaO2',
                ]);

                // Create a subscription using the dynamic price
                $subscription = Subscription::create([
                    'customer' => $customer->id,
                    'items' => [
                        [
                            'price' => $price->id,
                        ],
                    ],
                    'expand' => ['latest_invoice.payment_intent'],
                ]);

                $paymentData['stripe_payment_intent_id'] = $subscription->latest_invoice->payment_intent->id ?? null;
                $paymentData['status'] = $subscription->status ?? 'unknown';
                $paymentData['currency'] = 'usd';
                $paymentData['customer_id'] = $customer->id;

                if ($subscription->status !== 'active') {
                    throw new Exception('Subscription could not be created.');
                }

                $paymentRecord = Payment::create($paymentData);

                return ['status' => 'success', 'paymentRecord' => $paymentRecord];
            } else {
                // One-Time Payment
                $paymentIntent = PaymentIntent::create([
                    "amount" => $totalAmountInCents,
                    "currency" => "usd",
                    "payment_method" => $request->payment_method_id,
                    "confirmation_method" => "manual",
                    "confirm" => true,
                    "return_url" => route('payment.callback'),
                ]);

                if ($paymentIntent->status === 'requires_action' || $paymentIntent->status === 'requires_source_action') {
                    return response()->json([
                        'requires_action' => true,
                        'payment_intent_client_secret' => $paymentIntent->client_secret,
                    ]);
                }

                if ($paymentIntent->status === 'succeeded') {
                    $receiptUrl = null;
                    if (isset($paymentIntent->charges->data) && count($paymentIntent->charges->data) > 0) {
                        $receiptUrl = $paymentIntent->charges->data[0]->receipt_url;
                    }

                    $paymentData['stripe_payment_intent_id'] = $paymentIntent->id;
                    $paymentData['currency'] = $paymentIntent->currency;
                    $paymentData['payment_method_id'] = $paymentIntent->payment_method;
                    $paymentData['status'] = $paymentIntent->status;
                    $paymentData['receipt_url'] = $receiptUrl;
                    $paymentData['customer_id'] = $paymentIntent->customer;

                    $paymentRecord = Payment::create($paymentData);

                    return ['status' => 'success', 'paymentRecord' => $paymentRecord];
                }
            }
        } catch (Exception $e) {
            ErrorLog::create([
                'error_message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => '01 - Stripe _processPayment',
            ]);
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

}
