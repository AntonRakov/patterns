<?php

namespace App\Adapter;

require('././vendor/autoload.php');

/**
 * Адаптер для PayPal
 */
class PayPalAdapter implements PaymentAdapterInterface
{
    /**
     * @var PayPal
     */
    private PayPal $paypal;

    /**
     * @param PayPal $paypal
     */
    public function __construct(PayPal $paypal)
    {
        $this->paypal = $paypal;
    }

    /**
     * @param $amount
     * @return void
     */
    public function pay($amount): void
    {
        $this->paypal->sendPayment($amount);
    }
}