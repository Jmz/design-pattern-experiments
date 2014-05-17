<?php

/**
 * Class CarFactory - Our main abstract factory
 */
abstract class CarFactory {

    abstract protected function createCar($type);

}