<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DonationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $firstName;
    public $orderNumber;
    public $email;

    public function __construct($firstName, $email)
    {
        $this->firstName = $firstName;
        $this->email = $email;
    }

    public function build()
    {
        return $this->view('emails.donation')
            ->subject('Your Donation Confirmation')
            ->with([
                'name' => $this->firstName, // Only passing first name
            ])
            ->to($this->email) // Send to the provided email
            ->cc('administration@aeth.org')
            ->bcc(['wlsfernandes@aeth.org', 'lzortiz@aeth.org']); // Additional recipients
    }
}
