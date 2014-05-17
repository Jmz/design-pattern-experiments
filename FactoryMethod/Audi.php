<?php

/**
 * Class Audi
 */
class Audi extends CarInterface {

    public function getCarInfo()
    {
        return 'This is a nice '. $this->colour .' Audi!';
    }

}