<?php

/**
 * Interface carInterface - The interface all cars must implement.
 */
abstract class CarInterface {

    protected $colour = 'red';

    public function setColour($colour)
    {
        $this->colour = $colour;
    }

}