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

    
   
    public function showMembershipPaymentForm()
    {
        $amount = session('amount');
        return view('pages.members.member-payment', compact('amount'));
    }

    public function membershipRedirectPayment(Request $request)
    {
        $type = 'Membership';
        $program = 'AETH';
        $membership_plan = $request->input('membership_plan');
        $period = $request->input('period');
        $amount = $request->input('amount');
        return view('pages.members.member-payment', compact('amount', 'type', 'program', 'membership_plan', 'period'));
    }

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
        return view('pages.members.payment-membership-renew', compact('amount', 'type', 'program', 'membership_plan', 'period', 'email', 'first_name', 'last_name'));
    }
   

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







    /* TODO // hardcoded member in needs to update  
     
    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email',
            'membership_type' => 'required|string|max:50',
            // No password validation here since it will be auto-generated
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Begin a database transaction
        DB::beginTransaction();

        try {
            $password = Str::random(10); // You can set the desired length
            // hardcoded member in RegisteredUserController 
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($password), // Hash the generated password
            ]);
            $roleId = 17;
            $user->roles()->attach($roleId);
            // Create a new member
            $member = Member::create([
                'name' => $request->name,
                'email' => $request->email,
                'membership_type' => $request->membership_type,
                'start_date' => now(),
                'end_date' => now()->addYear(), // Example duration of 1 year
                'status' => 'active',
            ]);



            // Send an email with the auto-generated password
            Mail::to($user->email)->send(new WelcomeEmail($user, $password));

            // Commit the transaction
            DB::commit();

            return response()->json([
                'message' => 'Member and user added successfully!',
                'member' => $member,
                'user' => $user,
            ], 201);

        } catch (Exception $e) {
            // Rollback the transaction if something fails
            DB::rollBack();

            return response()->json([
                'error' => 'Failed to create member and user: ' . $e->getMessage(),
            ], 500);
        }
    }
        */
}