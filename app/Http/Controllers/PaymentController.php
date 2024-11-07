<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Models\Payment;
use App\Models\Member;
use App\Models\User;
use App\Models\ErrorLog;
use App\Mail\WelcomeEmail;
use Session;
use Exception;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        $amount = session('amount');
        return view('pages.payment', compact('amount'));
    }

    public function showMembershipPaymentForm()
    {
        $amount = session('amount');
        return view('pages.payment-membership', compact('amount'));
    }

    public function membershipRedirectPayment(Request $request)
    {
        $type = 'Membership';
        $program = 'AETH';
        $membership_plan = $request->input('membership_plan');
        $period = $request->input('period');
        $amount = $request->input('amount');
        return view('pages.payment-membership', compact('amount', 'type', 'program', 'membership_plan','period'));
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
        return view('pages.payment', compact('amount', 'type', 'program'));

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

    public function handleMembershipPayment(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
        ]);

        if ($validator->fails()) {
            $message = 'This email is already registered. </br>
            Please <a href="/login">log in</a> or <a href="/renew">renew your account</a>.';

            Session::flash('error', ['email' => $message]);
            return redirect()->route('payment-membership')->withInput()->withErrors(['email' => $message]);
        }

        DB::beginTransaction();

        try {
            $paymentResult = $this->_processPayment($request);

            if ($paymentResult['status'] === 'success') {
                $paymentRecord = $paymentResult['paymentRecord'];
                $password = Str::random(10);
                $user = User::create([
                    'name' => $paymentRecord->first_name . ' ' . $paymentRecord->last_name,
                    'email' => $paymentRecord->email,
                    'password' => Hash::make($password),
                ]);
                Member::create([
                    'user_id' => $user->id,
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $paymentRecord->email,
                    'membership_plan' => $request->membership_plan,
                    'membership_start_date' => now(),
                    'membership_end_date' => $request->period == 'year' ? now()->addYear() : now()->addDays(31),
                    'status' => 'active',
                ]);
                $request->period;
                Mail::to($user->email)->send(new WelcomeEmail($user, $password));
                DB::commit();
                Session::flash('success', 'Payment and membership creation successful!');
                return redirect()->route('payment-membership');
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



    public function _processPayment(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            // Create a PaymentIntent
            $paymentIntent = PaymentIntent::create([
                "amount" => $request->amount * 100, // Convert dollars to cents
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


    public function paymentCallback(Request $request)
    {
        // Handle the callback after Stripe redirects back to your app
        Session::flash('success', 'Payment completed!');
        return redirect()->route('payment.form');
    }

}
