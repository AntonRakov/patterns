<?php

require('vendor/autoload.php');

use App\Singleton\GuzzleClient,
    App\Adapter\MoneyBooker,
    App\Adapter\MoneyBookerAdapter,
    App\Adapter\PayPal,
    App\Adapter\PayPalAdapter,
    App\SimpleFactory\CarFactory;

/** 
 * Применение паттерна Singleton (Одиночка)
 */
$client = GuzzleClient::getInstance()->getClient();

$response = $client->request('GET', 'users');

$body = $response->getBody();
dump($body->getContents());

/** 
 * Применение паттерна Adapter (Адаптер)
 */
$moneyBooker = new MoneyBookerAdapter(new MoneyBooker());
$moneyBooker->pay('2629');

$payPal = new PayPalAdapter(new PayPal());
$payPal->pay('2629');

/** 
 * Применение паттерна Simple Factory (Простая фабрика)
 */
$sedan = CarFactory::build('sedan');
dump($sedan);

$suv = CarFactory::build('suv');
dump($suv);