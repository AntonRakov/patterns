<?php

namespace App\Adapter;

require('././vendor/autoload.php');

/**
 * Адаптер для платёжной системы MoneyBooker
 */
class MoneyBookerAdapter implements PaymentAdapterInterface
{
    /**
     * @var MoneyBooker
     */
    private MoneyBooker $moneybooker;

    /**
     * @param MoneyBooker $moneybooker
     */
    public function __construct(MoneyBooker $moneybooker)
    {
        $this->moneybooker = $moneybooker;
    }

    /**
     * @param $amount
     * @return void
     */
    public function pay($amount): void
    {
        $this->moneybooker->doPayment($amount);
    }
}