<?php
 
namespace App\SimpleFactory;

require('././vendor/autoload.php');

/**
 * Класс для создания Седана
 */
class CarSedan
{
    public function __construct()
    {
        dump('Creating Sedan');
    }
}