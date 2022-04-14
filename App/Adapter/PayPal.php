<?php

namespace App\Adapter;

require('././vendor/autoload.php');

/**
 * Класс для платёжной системы PayPal
 */
class PayPal
{
    public function __construct() {}

    /**
     * @param int $amount
     * @return void
     */
    public function sendPayment(int $amount): void
    {
        dump('Paying via PayPal: ' . $amount);
    }
}
  