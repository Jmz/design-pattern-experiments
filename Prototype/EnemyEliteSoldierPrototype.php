<?php

class EnemyEliteSoldierPrototype extends SoldierPrototype {

    protected $attack = 99;
    protected $defence = 80;

    /**
     * Clone should do nothing
     */
    public function __clone() {}

}