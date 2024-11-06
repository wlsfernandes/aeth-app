<?php

namespace App\Listeners;

use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\Events\Login;

class CheckMembershipExpiry
{
    public function handle(Login $event)
    {
        $user = $event->user;  // Get the authenticated user
        $member = Member::where('user_id', $user->id)->first();

        if ($member && $member->membership_end_date <= now()) {
            Auth::logout();
            Session::flash('error', 'Your membership has expired.');
            return redirect()->route('login');
        }
    }
}