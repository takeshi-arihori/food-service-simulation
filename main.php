<?php

require 'vendor/autoload.php';

use Cars\GasCar;
use Cars\ElectricCar;

$gasCar = new GasCar('Toyota');
$electricCar = new ElectricCar('Tesla');

echo $gasCar->drive() . PHP_EOL;
echo $gasCar->start() . PHP_EOL;

echo $electricCar->drive() . PHP_EOL;
echo $electricCar->start() . PHP_EOL;
