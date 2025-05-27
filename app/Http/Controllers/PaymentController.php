<?php
namespace App\Http\Controllers;

use App\Models\UspsMediaMailShipping;
use Stripe\PaymentIntent;
use Stripe\Stripe;
use Stripe\Exception\InvalidRequestException;
use Stripe\Customer;
use Stripe\Subscription;

use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use App\Mail\DonationEmail;
use App\Mail\OrderEmail;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\YoungLideres;
use App\Models\ErrorLog;
use App\Models\Payment;
use App\Models\Member;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

use Session;
use Exception;

/**
 * Class PaymentController
 *
 * Handles all payment-related operations, including membership payments, bookstore purchases,
 * donations, and tax calculations.
 *
 * @package App\Http\Controllers
 */
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


    /**
     * Handle donation payment redirection and amount processing.
     *
     * @param Request $request
     * @return
     */

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
    /**
     * Redirects the user to the payment page after calculating taxes and shipping costs.
     *
     * This method validates the cart amount, calculates applicable sales tax and shipping costs,
     * stores the values in the session, and then redirects the user to enter personal payment information.
     *
     * @param Request $request The HTTP request containing order details.
     * @return *\Illuminate\View\View Redirects to the personal information page for payment.
     */

    public function redirectContactPayment(Request $request)
    {
        $amount = $request->input('amount', 0);

        if ($amount == 0) {
            return redirect()->back()->with('error', 'Your cart is empty!');
        }

        $weight = $request->input('weight', 0);
        $minimumWeight = 0.1; // Default weight in pounds
        $weight = $weight > 0 ? $weight : $minimumWeight;

        // Define Florida state and county sales tax (Orlando, FL 32867)
        $stateTax = 0.06;  // 6% Florida state sales tax
        $countySurtax = 0.005; // 0.5% Orange County surtax
        $totalTaxRate = $stateTax + $countySurtax; // 6.5% total tax rate

        // Calculate tax
        $taxAmount = $amount * $totalTaxRate;
        $totalAmount = $amount + $taxAmount;
        $shipment_cost = UspsMediaMailShipping::where('weight_not_over', '>=', $weight)
            ->orderBy('weight_not_over', 'asc')
            ->value('rate');

        // Store values in session
        session([
            'amount' => $amount,
            'weight' => $weight,
            'taxAmount' => $taxAmount,
            'totalAmount' => $totalAmount,
            'shipment_cost' => $shipment_cost,
        ]);

        $cartItems = session('cart', []);
        $type = 'bookstore';
        $program = 'AETH';

        return view('pages.payments.bookstore.personal-info', compact('amount', 'type', 'program', 'cartItems', 'weight', 'taxAmount', 'totalAmount', 'shipment_cost'));
    }

    /**
     * Redirects the user to the credit payment page after calculating taxes and total cost.
     *
     * This method retrieves the order details, calculates applicable sales tax, shipping costs,
     * stores the values in the session, and redirects the user to the credit payment page.
     *
     * @param Request $request The HTTP request containing payment details.
     * @return \Illuminate\View\View Redirects to the credit payment page with order details.
     */


    public function redirectCreditPayment(Request $request)
    {
        $amount = $request->input('amount', 0);
        $shipment_cost = $request->input('hidden_shipment_cost', 0);
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $address = $request->input('address');
        $city = $request->input('city');
        $state = $request->input('state');
        $zipcode = $request->input('zipcode');


        // Define Florida state and county sales tax (Orlando, FL 32867)
        $stateTax = 0.06;  // 6% Florida state sales tax
        $countySurtax = 0.005; // 0.5% Orange County surtax
        $totalTaxRate = $stateTax + $countySurtax; // 6.5% total tax rate

        // Calculate tax
        $taxAmount = $amount * $totalTaxRate;
        $totalAmount = $amount + $shipment_cost + $taxAmount;

        // Store values in session
        session(['amount' => $amount]);
        session(['taxAmount' => $taxAmount]);
        session(['totalAmount' => $totalAmount]);
        $cartItems = session('cart', []);
        return view('pages.payments.bookstore.credit-payment', compact('amount', 'cartItems', 'shipment_cost', 'first_name', 'last_name', 'email', 'taxAmount', 'totalAmount', 'address', 'city', 'state', 'zipcode'));
    }

    /**
     * Handles donation amount selection and redirects to the payment page.
     *
     * This method checks if a custom donation amount is provided, validates the final donation amount,
     * and redirects the user to the payment page with the selected amount.
     *
     * @param Request $request The HTTP request containing donation details.
     * @return \Illuminate\Http\RedirectResponse Redirects to the payment page with the donation amount.
     */

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

    /**
     * Handles the payment processing and redirects the user based on the payment result.
     *
     * This method attempts to process the payment, handles different payment statuses, and
     * redirects the user accordingly. If additional authentication is required, it returns a JSON response.
     * In case of an error, it logs the issue and redirects the user back to the payment page.
     *
     * @param Request $request The HTTP request containing payment details.
     * @return *\Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse Redirects to the payment page or
     *         returns a JSON response if additional authentication is required.
     *
     * @throws \Exception Logs any payment processing errors and redirects the user with an error message.
     */

    public function handlePayment(Request $request)
    {
        try {
            $paymentResult = $this->_processPayment($request);

            if ($paymentResult['status'] === 'success') {
                Session::flash('success', 'Payment successful!');
                return redirect()->route('gracias', ['text' => 'purchase']);
            } elseif ($paymentResult['status'] === 'requires_action') {
                return response()->json([
                    'requires_action' => true,
                    'payment_intent_client_secret' => $paymentResult['client_secret'],
                ]);
            } elseif ($paymentResult['status'] === 'error') {
                Session::flash('error', $paymentResult['message'] ?? 'An error occurred during the payment process.');
                return redirect()->route('payment');
            }
        } catch (Exception $e) {
            // Log the error in the database
            ErrorLog::create([
                'error_message' => $e->getMessage() ?? 'Unknown error handlePayment PaymentController',
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => 'payment_error',
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
    /**
     * Handles donation processing and manages the payment response.
     *
     * This method processes the donation payment, sends a confirmation email if an email is provided,
     * and provides feedback to the user based on the payment status. If it's a recurring donation,
     * a special message is displayed. Errors are logged and handled accordingly.
     *
     * @param Request $request The HTTP request containing donation details.
     * @return *\Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse Redirects to the payment page
     *         or returns a JSON response if additional authentication is required.
     *
     * @throws \Exception Logs any errors that occur during the donation process and redirects the user
     *                    with an error message.
     */

    public function handleDonation(Request $request)
    {
        try {
            $donationResult = $this->_processPayment($request);

            if ($donationResult['status'] === 'success') {
                // send donation email
                if (!empty($donationResult['email'])) {
                    try {
                        Mail::to($donationResult['email'])
                            ->cc('administration@aeth.org')
                            ->bcc(['wlsfernandes@aeth.org', 'lzortiz@aeth.org'])
                            ->send(new DonationEmail($donationResult['email'] ?? ''));
                    } catch (Exception $e) {
                        Log::error('Failed to send donation email: ' . $e->getMessage());
                    }
                } else {
                    Log::warning('Skipping email sending: No email found in donationResult.', $donationResult);
                }
                if (isset($donationResult['subscription_id'])) {
                    Session::flash('success', 'Thank you for your monthly recurring donation!');
                } else {
                    Session::flash('success', 'Thank you for your generous donation!');
                }
                return redirect()->route('gracias', ['text' => 'donation']);
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
                'error_message' => $e->getMessage() ?? 'Unknown error handleDonation PaymentController',
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => 'payment_error',
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
    /**
     * Handles membership payment processing and user registration.
     *
     * This method validates the user's email, processes the membership payment, creates a new user account,
     * assigns a membership role, registers the user as a member, and sends a welcome email with login credentials.
     * If the payment fails, the transaction is rolled back, and an error is logged.
     *
     * @param Request $request The HTTP request containing membership payment and user details.
     * @return *\Illuminate\Http\RedirectResponse Redirects to the login page on success or back to the membership
     *         payment page on failure.
     *
     * @throws \Exception Logs any errors encountered during payment processing and membership creation,
     *                    then redirects the user with an error message.
     */

    public function handleMembershipPayment(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'amount' => 'required|numeric|min:0.01',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            if ($errors->has('email')) {
                $message = 'This email is already registered.';
            } elseif ($errors->has('amount')) {
                $message = 'The amount must be greater than 0. Return to the membership page to try again.';
            } else {
                $message = $errors->first(); // Get the first error message as a string
            }

            Session::flash('error', $message); // Store only a single string message
            return redirect()->route('payment-membership')->withInput()->withErrors($errors);
        }
        // ✅ Young Lideres check
        if ($request->has('young_lideres_membership') && $request->young_lideres_membership === 'true') {
            $young_lider = YoungLideres::where('email', $request->email)->first();
            if (!$young_lider) {
                Session::flash('error', 'To be a participant of the Young Líderes Program, please email mescala@aeth.org.');
                return redirect()->route('payment-membership')->withInput();
            }
            $request->merge(['young_lider' => $young_lider]);
        }
        DB::beginTransaction();

        try {
            $request->merge(['is_recurring' => true]); // Set All Memberships to be recurring payment
            $paymentResult = $this->_processPayment($request);

            if ($paymentResult['status'] === 'success') {
                $paymentRecord = $paymentResult['paymentRecord'];
                $password = 'adminAeth2025';
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
                    'membership_end_date' => $request->is_recurring
                        ? '2099-12-31'
                        : ($request->period == 'year'
                            ? now()->addYear()
                            : now()->addDays(31)),
                    'isYear' => $request->period == 'year' ? true : false,
                    'status' => 'active',
                    'is_recurring' => true,
                ]);

                if ($request->has('young_lider') && $request->young_lider instanceof YoungLideres) {
                    $youngLider = YoungLideres::find($request->young_lider->id);
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
            } elseif ($paymentResult['status'] === 'error') {
                DB::rollBack();
                ErrorLog::create([
                    'error_message' => $paymentResult['message'] ?? 'error paymentController handleMembershipPayment',
                    'stack_trace' => 'payment result error ',
                    'error_code' => 'payment_processing_error',
                ]);
                Session::flash('error', $paymentResult['message'] ?? 'An error occurred during the payment process.');
                return redirect()->route('payment-membership');
            }

        } catch (Exception $e) {
            DB::rollBack();
            ErrorLog::create([
                'error_message' => $e->getMessage() ?? 'Unknown error handleMembershipPayment PaymentController',
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => 'payment_error',
            ]);
            Session::flash('error', 'An error occurred during the payment process.');
            return redirect()->route('payment');
        }
    }
    /**
     * Handles membership renewal payment processing.
     *
     * This method processes the renewal payment, updates the user's membership details,
     * and extends the membership duration based on the selected period. If the payment fails,
     * the transaction is rolled back, and an error is logged.
     *
     * @param Request $request The HTTP request containing membership renewal payment details.
     * @return *\Illuminate\Http\RedirectResponse Redirects to the login page on success or back
     *         to the membership payment page on failure.
     *
     * @throws \Exception Logs any errors encountered during the renewal process and redirects
     *                    the user with an error message.
     */

    public function handleMembershipRenewPayment(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
        ]);

        DB::beginTransaction();

        try {

            $request->merge(['is_recurring' => true]); // Set All Memberships to be recurring payment

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
                            'membership_end_date' => $request->is_recurring
                                ? '2099-12-31'
                                : ($request->period == 'year'
                                    ? now()->addYear()
                                    : now()->addDays(31)),
                            'isYear' => $request->period == 'year' ? true : false,
                            'status' => 'active',
                            'is_recurring' => true,
                        ]
                    );
                }
                DB::commit();
                Session::flash('success', 'Congratulations ! The operation was successful!');
                return redirect()->route('thankYouMember');

            } elseif ($paymentResult['status'] === 'error') {
                DB::rollBack();
                ErrorLog::create([
                    'error_message' => $paymentResult['message'] ?? 'error handleMembershipRenewPayment',
                    'stack_trace' => 'payment result error ',
                    'error_code' => 'payment_processing_error',
                ]);
                Session::flash('error', $paymentResult['message'] ?? 'An error occurred during the payment process.');
                return redirect()->route('payment-membership');
            }

        } catch (Exception $e) {
            DB::rollBack();
            ErrorLog::create([
                'error_message' => $e->getMessage() ?? 'Unknown error handleMembershipRenewPayment PaymentController',
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => 'payment_error',
            ]);
            Session::flash('error', 'An error occurred during the payment process.');
            return redirect()->route('payment');
        }
    }

    /**
     * Handles cart payment processing and order creation.
     *
     * This method processes the cart payment, validates stock availability, updates product stock,
     * creates an order with order items, and sends a confirmation email to the customer.
     * If any step fails, the transaction is rolled back, and an error is logged.
     *
     * @param Request $request The HTTP request containing cart and payment details.
     * @return *\Illuminate\Http\RedirectResponse Redirects to the bookstore page on success or failure.
     *
     * @throws \Exception Logs any errors encountered during payment processing or order creation
     *                    and redirects the user with an error message.
     */

    public function cartPayment(Request $request)
    {
        DB::beginTransaction();

        try {
            $shipmentCost = $request->input('hidden_shipment_cost') ?? 0;
            $taxAmount = $request->input('taxAmount') ?? 0;
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
                'tax_amount' => $taxAmount ?? 0,
                'super_total' => $paymentRecord->totalAmount,
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
            try {
                Mail::to($paymentRecord->email)->send(new OrderEmail($paymentRecord->first_name, $order->order_number, $paymentRecord->email));
            } catch (Exception $e) {
                Log::error('Failed to send order email: ' . $e->getMessage());
            }

            DB::commit();
            session()->forget(['cart', 'cart_total', 'cart_total_weight', 'cart_count', 'amount', 'weight']);
            session()->flash('success', 'Your payment was processed successfully!');
            return redirect()->route('gracias', ['text' => 'purchase']);
        } catch (Exception $e) {
            DB::rollBack();

            ErrorLog::create([
                'error_message' => $e->getMessage() ?? 'Unknown error cartPayment PaymentController',
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => 'payment_error',
            ]);

            session()->flash('error', $e->getMessage());
            return redirect()->route('bookstore');
        }
    }



    /**
     * Return callback from stripe to redirect.
     *
     * @param Request $request
     * @return
     */
    public function paymentCallback(Request $request)
    {
        // Handle the callback after Stripe redirects back to your app
        Session::flash('success', 'Payment completed!');
        return redirect()->route('gracias', ['text' => 'purchase']);
    }

    /**
     * Processes a payment transaction using Stripe for both one-time and recurring payments.
     *
     * This method calculates the total amount, processes the payment through Stripe,
     * and stores payment details in the database. It supports both one-time payments and
     * recurring subscriptions. In case of failure, it logs errors and returns an error response.
     *
     * @param Request $request The HTTP request containing payment details.
     * @return *array Returns an array with payment status and details or a JSON response for
     *               additional authentication if required.
     *
     * @throws \Exception Logs any errors encountered during the payment process and returns an
     *                    appropriate error response.
     */

    public function _processPayment(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $amount = $request->input('amount');
            $shipmentCost = $request->input('hidden_shipment_cost') ?? 0;
            $taxAmount = $request->input('taxAmount') ?? 0;
            $totalAmount = $amount + $shipmentCost + $taxAmount;
            $totalAmountInCents = $totalAmount * 100;

            $paymentData = [
                'first_name' => $request->first_name ?? '***',
                'last_name' => $request->last_name ?? '***',
                'email' => $request->email ?? 'email@notfound',
                'type' => $request->type ?? '***',
                'program' => $request->program ?? '***',
                'amount' => $amount ?? 0,
                'shipment_cost' => $shipmentCost ?? 0,
                'isRecurring' => $request->is_recurring ?? false,
                'payment_date' => now(),
                'tax' => $taxAmount ?? 0,
                'totalAmount' => $totalAmount ?? 0,
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
                $interval = $request->period == 'year' ? 'year' : 'month';
                // Dynamically create a Price object with custom amount
                $price = \Stripe\Price::create([
                    'unit_amount' => $totalAmountInCents,
                    'currency' => 'usd',
                    'recurring' => ['interval' => $interval],
                    'product' => env('STRIPE_PRODUCT_ID'),
                    // 'product' => 'prod_Rd0XFvJV9PsaO2', test mode
                    // 'product' => 'prod_RsPxHERatW29WB',
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

                return [
                    'status' => 'success',
                    'paymentRecord' => $paymentRecord,
                    'email' => $paymentData['email'],
                    'first_name' => $paymentData['first_name']
                ];
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

                    return [
                        'status' => 'success',
                        'paymentRecord' => $paymentRecord,
                        'email' => $paymentData['email'],
                        'first_name' => $paymentData['first_name']
                    ];
                }
            }
        } catch (InvalidRequestException $e) {
            ErrorLog::create([
                'error_message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => 'stripe_invalid_request',
            ]);
            return ['status' => 'error', 'message' => $e->getMessage()];
        } catch (Exception $e) {
            ErrorLog::create([
                'error_message' => $e->getMessage() ?? 'Unknown error _processPayment PaymentController',
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => 'payment_error',
            ]);
            return ['status' => 'error', 'message' => 'An unexpected error occurred. Please try again later.'];
        }
    }

}
