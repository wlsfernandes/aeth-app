<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Http;


/**
 * Class ContactController
 *
 * Handles the processing and sending of contact form messages via email.
 *
 * @package App\Http\Controllers
 */
class ContactController extends Controller
{
    /**
     * Handle and send the contact form message via email.
     *
     * This method validates user input, compiles the email data, and sends it to
     * predefined recipients. If successful, it redirects back with a success message.
     *
     * @param Request $request The HTTP request containing contact form data.
     * @return RedirectResponse Redirects back with a success message upon successful email delivery.
     */
    public function sendEmail(Request $request): RedirectResponse
    {
        // Validate the form input
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|captcha'
        ]);
        // Verify with Google
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        $result = $response->json();

        if (!($result['success'] ?? false) || ($result['score'] ?? 0) < 0.5) {
            return back()->withErrors(['g-recaptcha-response' => 'reCAPTCHA verification failed.'])->withInput();
        }
        // Collect form data
        $data = $request->all();

        // Define recipients
        $recipients = ['info@aeth.org', 'wlsfernandes@aeth.org'];

        // Send email using Mailable class
        Mail::to($recipients)->send(new ContactFormMessage($data));

        // Redirect back with success message
        return redirect()->back()
            ->with('success', 'Your message has been sent! An Aeth Member will reach out to you.');
    }
}
