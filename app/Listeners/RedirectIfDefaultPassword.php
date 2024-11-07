<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RedirectIfDefaultPassword
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Login $event)
    {
        $user = $event->user;

        if (Hash::check('adminAeth2025', $user->password)) {
            $user->force_password_reset_token = Str::random(60);
            $user->save();
            session(['url.intended' => route('profile.update', ['token' => $user->force_password_reset_token])]);
            Auth::logout();
            return redirect()->route('profile.update', ['token' => $user->force_password_reset_token])
                ->with('warning', 'Please update your password.');
        }
    }

}
