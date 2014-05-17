<?php

require_once('CarFactory.php');
require_once('GermanCarFactory.php');
require_once('CarInterface.php');
require_once('Bmw.php');
require_once('Audi.php');

$german_car_factory = new GermanCarFactory();

// Make my BMW
$bmw = $german_car_factory->createCar('BMW');
$bmw->setColour('green');
echo $bmw->getCarInfo();

echo '<hr />';

// Make my audi
$audi = $german_car_factory->createCar('Audi');
$audi->setColour('pink');
echo $audi->getCarInfo();

