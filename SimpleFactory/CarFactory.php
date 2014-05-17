<?php

class CarFactory {

    public function createCar($type)
    {
        if (!class_exists($type)) {
            throw new Exception("$type is not valid!");
        }

        return new $type();
    }

}