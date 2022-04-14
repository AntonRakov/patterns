<?php
 
namespace App\SimpleFactory;

require('././vendor/autoload.php');

/**
 * Класс для создания SUV
 */
class CarSuv
{
    public function __construct()
    {
        dump('Creating SUV');
    } 
}