<?php

abstract class AbstractCharacter implements Character
{
    public function getName()
    {
        return $this->name;
    }

    public function move()
    {
        return $this->getName() . ' moved';
    }
}