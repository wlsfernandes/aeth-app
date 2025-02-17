<?php
namespace App\Http\Controllers;

use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class PayPalController extends Controller
{
    /**
     * Create a PayPal order for payment.
     */

    public function createPayment(Request $request)
    {

        $type = $request->input('type');
        $program = $request->input('program');
        $membershipPlan = $request->input('membership_plan');
        $period = $request->input('period');
        $amount = $request->input('amount', 100); // Default to 100 if not provided
        $isRecurring = $request->has('is_recurring') ? true : false;


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


                // Save payment data
                /*   Payment::create([
                       'student_id' => $studentId,
                       'certification_id' => $certificationId,
                       'transaction_id' => $transactionId,
                       'status' => 'COMPLETED',
                       'amount' => $amount,
                       'currency' => $currency,
                   ]);

                   // Associate student with the discipline
                   $student = 1;
                   $student->certifications()->attach($certificationId, [
                       'created_at' => now(),
                       'updated_at' => now(),
                   ]); */

                return redirect()->route('payment')->with('success', 'Payment successful.');
            }
            return redirect()->route('payment')->withErrors('Payment failed. Please try again.');
        } catch (Exception $e) {
            return redirect()->route('payment')->withErrors('An error occurred: ' . $e->getMessage());
        }
    }
}
