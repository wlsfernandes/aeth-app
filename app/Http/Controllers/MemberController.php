<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Services\PaymentService;
use App\Models\User;
use App\Models\Member;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use App\Mail\WelcomeEmail;
use App\Models\ErrorLog;
use Session;
use Exception;



class MemberController extends Controller
{

    protected $paymentService;


    /**
     * Displays the membership payment form.
     *
     * This method retrieves the membership amount from the session and passes it to the view.
     *
     * @return \Illuminate\View\View Returns the membership payment form view with the amount.
     */

    public function showMembershipPaymentForm()
    {
        $amount = session('amount');
        return view('pages.payments.membership.page', compact('amount'));
    }
    /**
     * Redirects the user to the membership payment page with selected details.
     *
     * This method retrieves the membership plan, period, and amount from the request and
     * passes them to the membership payment page for processing.
     *
     * @param Request $request The HTTP request containing membership payment details.
     * @return * \Illuminate\View\View Returns the membership payment page with the provided details.
     */

    public function membershipRedirectPayment(Request $request)
    {
        $type = 'Membership';
        $program = 'AETH';
        $membership_plan = $request->input('membership_plan');
        $period = $request->input('period');
        $amount = $request->input('amount');
        return view('pages.payments.membership.page', compact('amount', 'type', 'program', 'membership_plan', 'period'));
    }
    /**
     * Redirects the user to the membership renewal payment page with selected details.
     *
     * This method determines the membership renewal amount and period based on the selected
     * membership plan. It retrieves user details from the request and passes them to the
     * membership renewal payment page.
     *
     * @param Request $request The HTTP request containing membership renewal details.
     * @return \Illuminate\View\View Returns the membership renewal payment page with the provided details.
     */

    public function membershipRedirectRenewPayment(Request $request)
    {
        $type = 'Membership';
        $program = 'AETH';
        $membership_plan = $request->input('membership_plan');
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $period = null;
        $amount = null;


        switch ($membership_plan) {

            case 'institutional_year':
                $amount = 200.00;
                $period = 'year';
                break;
            case 'individual_year':
                $amount = 100.00;
                $period = 'year';
                break;
            case 'student_year':
                $amount = 50.00;
                $period = 'year';
                break;
            case 'institutional_month':
                $amount = 20.00;
                $period = 'month';
                break;
            case 'individual_month':
                $amount = 10.00;
                $period = 'month';
                break;
            case 'student_month':
                $amount = 5.00;
                $period = 'month';
                break;
            default:
                $amount = 200.00;
                $period = 'year';
                break;

        }
        return view('pages.payments.membership.renew', compact('amount', 'type', 'program', 'membership_plan', 'period', 'email', 'first_name', 'last_name'));
    }

    /**
     * Displays the membership renewal page with user details.
     *
     * This method retrieves the authenticated user's information and membership details
     * from the session and database. If successful, it passes the user's email and name
     * to the renewal page. If an error occurs, it logs the issue and redirects to the login page.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse Returns the membership renewal
     *         page with user details or redirects to login with an error message.
     *
     * @throws \Exception Logs any errors encountered while retrieving user membership details.
     */

    public function renew()
    {
        try {
            $user = User::where('email', session('user_email'))->first();
            $member = Member::where('user_id', $user->id)->first();
            $email = $user->email;
            $first_name = $member->first_name;
            $last_name = $member->last_name;
            return view('pages.renew', compact('email', 'first_name', 'last_name'));


        } catch (Exception $e) {
            ErrorLog::create([
                'error_message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
                'error_code' => 'renew error 0171',
            ]);
            return redirect()->route('login')->with('error', 'Error to renew your Membership');
        }
    }





}
