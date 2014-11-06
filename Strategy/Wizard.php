<?php

class Wizard extends AbstractCharacter
{
    public $name = 'Wizard';

    public function __construct(AttackBehavior $attack)
    {
        $this->attack = $attack;
    }

    public function getName()
    {
        return $this->name;
    }

    public function attack()
    {
        return $this->getName() . ' ' .$this->attack->implementAttack();
    }
}