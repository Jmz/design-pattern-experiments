<?php

/**
 * Class GermanCarFactory - Creates all German cars
 */
class GermanCarFactory extends CarFactory {

    public function createCar($type)
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