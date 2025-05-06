<?php
namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class LogSuccessfulLogin
{
    public function handle(Login $event): void
    {
        $user = $event->user;

        DB::table('login_logs')->insert([
            'user_id' => $user->id,
            'email' => $user->email,
            'logged_in_at' => now(),
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
    }
}
