<?php

namespace App\Listeners;

use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\Events\Login;
use App\Exceptions\MembershipExpiredException;

class CheckMembershipExpiry
{
    public function handle(Login $event)
    {
        $user = $event->user;
        $member = Member::where('user_id', $user->id)->first();

        if ($member && $member->membership_end_date <= now()) {
            Auth::logout();
            throw new MembershipExpiredException();
        }
    }
}