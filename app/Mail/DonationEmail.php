<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DonationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $firstName;

    public function __construct($firstName)
    {
        $this->firstName = $firstName;
    }

    public function build()
    {
        return $this->view('emails.donation')
            ->subject('Your Donation Confirmation')
            ->with([
                'name' => $this->firstName,
            ]);
    }
}
