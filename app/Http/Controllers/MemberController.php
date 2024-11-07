<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\WelcomeEmail;

class MemberController extends Controller
{
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
              // Generate a random password
              $password = Str::random(10); // You can set the desired length

              // Create a new user associated with the member
              $user = User::create([
                  'name' => $request->name,
                  'email' => $request->email,
                  'password' => bcrypt($password), // Hash the generated password
                  // Include any other fields necessary for the user
              ]);
              
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
}