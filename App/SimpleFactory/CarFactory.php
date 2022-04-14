<?php

namespace App\SimpleFactory;

require('././vendor/autoload.php');

/**
 * Класс-фабрика для создания объектов типа "Car"
 */
class CarFactory
{
    public function __construct() {}

    /**
     * @param string $type
     * @return mixed
     * @throws \Exception
     */
    public static function build(string $type = ''): mixed
    {
        if ($type == '') {
            throw new \Exception('Invalid Car Type.');
        } else {
            $className = 'App\SimpleFactory\Car' . ucfirst($type);

            if (class_exists($className)) {
                return new $className();
            } else {
                throw new \Exception('Car type not found.');
            }
        }
    }
}