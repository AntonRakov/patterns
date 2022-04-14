<?php

namespace App\Adapter;

require('././vendor/autoload.php');

/**
 * Класс платёжной системы MoneyBooker
 */
class MoneyBooker
{
    public function __construct() {}

    /**
     * @param int $amount
     * @return void
     */
    public function doPayment(int $amount): void
    {
        dump('Paying via MoneyBooker: ' .  $amount);
    }
}