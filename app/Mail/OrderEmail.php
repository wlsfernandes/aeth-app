<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $orderNumber;

    public function __construct($user, $orderNumber)
    {
        $this->user = $user;
        $this->orderNumber = $orderNumber;
    }

    public function build()
    {
        return $this->view('emails.order')
                    ->subject('Your Order Confirmation')
                    ->with([
                        'name' => $this->user->first_name . ' ' . $this->user->last_name,
                        'orderNumber' => $this->orderNumber,
                    ])
                    ->to($this->user->email) // Send to the user
                    ->cc('lortiz@aeth.org')
                    ->bcc('wlsfernandes@aeth.org'); // Send to an additional email
    }
}
