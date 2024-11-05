<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Models\Payment;
use Session;
use Exception;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        $amount = session('amount');
        return view('pages.payment', compact('amount'));
    }

    public function membershipRedirectPayment(Request $request)
    {
        $type = 'Membership';
        $program = 'AETH';
        $amount = $request->input('amount');
        return view('pages.payment-membership', compact('amount','type', 'program'));
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
        return view('pages.payment', compact('amount','type', 'program'));
       
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
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try { 
            // Create a PaymentIntent
            $paymentIntent = PaymentIntent::create([
                "amount" => $request->amount * 100, // Convert dollars to cents
                "currency" => "usd",
                "payment_method" => $request->payment_method_id,
                "confirmation_method" => "manual", // Manual confirmation
                "confirm" => true,
                "return_url" => route('payment.callback'), // Return URL after 3D Secure
            ]);

            // If payment requires additional action (e.g., 3D Secure)
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
                Payment::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'type' => $request->type,
                    'program' => $request->program,
                    'amount' => $request->amount,
                    'currency' => $paymentIntent->currency,
                    'payment_method_id' => $paymentIntent->payment_method,
                    'status' => $paymentIntent->status,
                    'stripe_payment_intent_id' => $paymentIntent->id,
                    'receipt_url' => $receiptUrl,
                    'customer_id' => $paymentIntent->customer,
                    'payment_date' => now(),
                ]);

                Session::flash('success', 'Payment successful!');
                return redirect()->route('payment');
            }

        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
            return redirect()->route('payment'); 
        }
    }
    // Callback after redirection
    public function paymentCallback(Request $request)
    {
        // Handle the callback after Stripe redirects back to your app
        Session::flash('success', 'Payment completed!');
        return redirect()->route('payment.form');
    }

}
