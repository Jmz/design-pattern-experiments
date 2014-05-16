<?php

/**
 * Class CarFactory - Our main abstract factory
 */
abstract class CarFactory {

    abstract protected function create_car($type);

}

/**
 * Class GermanCarFactory - Creates all German cars
 */
class GermanCarFactory extends CarFactory {

    public function create_car($type)
    {
        switch($type) {
            case 'BMW';
                return new BMW();
            break;

            case 'Audi';
                return new Audi();
            break;
        }
    }

}

/**
 * Interface carInterface - The interface all cars must implement.
 */
abstract class CarInterface {

    protected $colour = 'red';

    public function set_colour($colour)
    {
        $this->colour = $colour;
    }

}

/**
 * Class BMW
 */
class BMW extends CarInterface {

    public function get_car_info()
    {
        return 'This is a nice '. $this->colour .' BMW!';
    }

}

/**
 * Class Audi
 */
class Audi extends CarInterface {

    public function get_car_info()
    {
        return 'This is a nice '. $this->colour .' Audi!';
    }

}

$german_car_factory = new GermanCarFactory();

// Make my BMW
$bmw = $german_car_factory->create_car('BMW');
$bmw->set_colour('green');
echo $bmw->get_car_info();

echo '<br/>';

// Make my audi
$audi = $german_car_factory->create_car('Audi');
$audi->set_colour('pink');
echo $audi->get_car_info();

