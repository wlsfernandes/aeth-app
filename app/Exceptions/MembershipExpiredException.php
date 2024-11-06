<?php

namespace App\Exceptions;

use Exception;

class MembershipExpiredException extends Exception
{
    public function __construct($message = 'Your membership has expired.')
    {
        parent::__construct($message);
    }

    public function render($request)
    {
        return redirect()->route('login')->withErrors(['error' => $this->getMessage()]);
    }
}