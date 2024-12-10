<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate the form input
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        $data = $request->all();

        Mail::to('info@aeth.org', 'wlsfernandes@aeth.org')->send(new ContactFormMessage($data));

        return redirect()->back()
        ->with('success', 'Your message has been sent! An Aeth Member will reach you out');
       

    }
}
