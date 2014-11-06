<?php

class Swordsman extends AbstractCharacter
{
    public $name = 'Swordsman';

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