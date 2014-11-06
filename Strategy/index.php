<?php

require('Character.php');
require('AbstractCharacter.php');
require('Swordsman.php');
require('Wizard.php');

require('AttackBehaviour.php');
require('SwordAttack.php');
require('MagicAttack.php');

$swordsman = new Swordsman(new SwordAttack);
echo '<h3>'.$swordsman->getName().'</h3>';
echo $swordsman->attack();
echo '<br/>';
echo $swordsman->move();

echo '<hr/>';

$wizard = new Wizard(new MagicAttack);
echo '<h3>'.$wizard->getName().'</h3>';
echo $wizard->attack();
echo '<br/>';
echo $wizard->move();