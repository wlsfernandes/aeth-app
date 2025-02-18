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
use App\Models\Payment;
use App\Models\Order;
use Exception;

class PayPalController extends Controller
{
    /**
     * Create a PayPal order for payment.
     */

    public function createPayment(Request $request)
    {

        $amount = 100;
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->setAccessToken($provider->getAccessToken());

        // Create an order with PayPal
        $response = $provider->createOrder([
            "intent" => "CAPTURE", // Indicates that payment will be captured immediately
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD", // Currency set to BRL
                        "value" => $amount, // The amount to charge
                    ]
                ]
            ],
            "application_context" => [
                "return_url" => route('paypal.capture', ['amount' => $amount]),
                "cancel_url" => route('test.paypal')
            ]
        ]);

        // Redirect the user to PayPal to approve the payment
        if (isset($response['id']) && isset($response['links'])) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect($link['href']);
                }
            }
        }

        // If something goes wrong, redirect back with an error
        return redirect()->back()->withErrors('Something went wrong while creating the payment.');
    }


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
            return redirect()->back()->withErrors($e->getMessage());
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
            return redirect()->route('payment')->withErrors('An error occurred: ' . $e->getMessage());
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
            return redirect()->back()->withErrors($e->getMessage());
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
            return redirect()->route('payment')->withErrors('An error occurred: ' . $e->getMessage());
        }
    }



}
