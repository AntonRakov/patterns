<?php

namespace App\Adapter;

require('././vendor/autoload.php');

/**
 * Интерфейс для платёжных систем
 */
interface PaymentAdapterInterface
{
    /**
     * @param $amount
     * @return void
     */
    public function pay($amount): void;
}