<?php

namespace App\Exceptions;

use Exception;

class MembershipExpiredException extends Exception
{
    protected $userEmail;

    public function __construct($userEmail, $message = 'Your membership has expired. <a href="/renew">Click here to renew</a>.')
    {
        $this->userEmail = $userEmail;
        $message = "Membership expired for user: {$userEmail}. " . $message;
        parent::__construct($message);
    }

    public function render($request)
    {
        // Store the email in session
        session()->flash('user_email', $this->userEmail);

        // Redirect the user to the renew page
        return redirect()->route('renew')->withErrors(['error' => $this->getMessage()]);
    }
}