<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $firstName;
    public $orderNumber;
    public $email;

    public function __construct($firstName, $orderNumber, $email)
    {
        $this->firstName = $firstName;
        $this->orderNumber = $orderNumber;
        $this->email = $email;
    }

    public function build()
    {
        return $this->view('emails.order')
            ->subject('Your Order Confirmation')
            ->with([
                'name' => $this->firstName,
                'orderNumber' => $this->orderNumber,
            ])
            ->cc('administration@aeth.org')
            ->bcc(['wlsfernandes@aeth.org', 'lzortiz@aeth.org']);
    }
}
