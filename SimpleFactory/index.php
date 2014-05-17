<?php

// Include files
require_once('CarFactory.php');
require_once('CarInterface.php');
require_once('BMW.php');
require_once('Audi.php');

// Instantiate the concrete factory class.
$car_factory = new CarFactory();

/**
 * Use our factory class object to create instances of the individual cars.
 * It is the fact that our factory class is concrete and that it doesn't delegate creation to
 * a subclass that makes it a simple factory. If it did it would be the factory method pattern.
 */

$bmw = $car_factory->createCar('Bmw');
$audi = $car_factory->createCar('Audi');

// Check everything is working!

echo $bmw->getInfo();

echo '<hr/>';

echo $audi->getInfo();