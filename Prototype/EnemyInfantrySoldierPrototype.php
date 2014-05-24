<?php

class EnemyInfantrySoldierPrototype extends SoldierPrototype {

    protected $attack = 70;
    protected $defence = 30;

    /**
     * Clone should do nothing
     */
    public function __clone() {}

}