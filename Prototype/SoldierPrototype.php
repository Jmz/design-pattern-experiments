<?php

abstract class SoldierPrototype {

    protected $name;
    protected $attack;
    protected $defence;

    /**
     * Clone should do nothing
     */
    public function __clone() {}

    /**
     * Use this to demonstrate everything working. It isn't part of the design pattern.
     * @return string
     */
    public function __toString()
    {
        return "{$this->getName()} / Attack: {$this->attack} / Defence: {$this->defence}";
    }

    /**
     * Set the name of the soldier
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get the name of the soldier
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

}