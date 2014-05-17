<?php

/**
 * Class BMW
 */
class BMW extends CarInterface {

    public function getCarInfo()
    {
        return 'This is a nice '. $this->colour .' BMW!';
    }

}