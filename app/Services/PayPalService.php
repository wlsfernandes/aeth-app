<?php

namespace App\Services;

use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PayPalService
{
    protected $paypal;

    public function __construct()
    {
        $this->paypal = new PayPalClient;
        $this->paypal->setApiCredentials(config('paypal'));
    }

    public function createOrder($amount)
    {
        $order = [
            "intent" => "CAPTURE",
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $amount,
                    ],
                ],
            ],
            "application_context" => [
                "cancel_url" => route('paypal.cancel'),
                "return_url" => route('paypal.success'),
            ],
        ];

        return $this->paypal->createOrder($order);
    }

    public function captureOrder($orderId)
    {
        return $this->paypal->capturePaymentOrder($orderId);
    }
}
