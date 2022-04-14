<?php

namespace App\Singleton;

require('././vendor/autoload.php');

use GuzzleHttp\Client;

/**
 * Класс для создания клиента Guzzle
 */
class GuzzleClient
{
    private static $instance;

    /**
     * Защищаем от создания через new GuzzleClient
     * @return void
     */
    public function __construct() {}
    
    /**
     * Защищаем от создания через клонирование
     * @return void
     */
    public function __clone() {}
    
    /**
     * Защищаем от создания через unserialize
     * @return void
     */
    public function __wakeup() {}
    
    /**
     * Возвращает единственный экземпляр класса
     * @return GuzzleClient
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }

        return self::$instance;
    }
    
    /**
     * Возвращает экземпляр клиента
     * @return Client
     */
    public function getClient(): Client
    {
        return new Client([
            'base_uri' => 'https://jsonplaceholder.typicode.com/',
            'headers' => [
                'Content-Type' => 'application/json',
            ]
        ]);
    }
}
  