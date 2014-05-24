<?php

require_once('SoldierPrototype.php');
require_once('EnemyEliteSoldierPrototype.php');
require_once('EnemyInfantrySoldierPrototype.php');

$enemy_elite_soldier_prototype = new EnemyEliteSoldierPrototype();
$enemy_infantry_soldier_prototype = new EnemyInfantrySoldierPrototype();

// Create 20 elite enemy soldiers
for($i = 0; $i < 20; $i++) {
    $enemy_elite_soldier = clone $enemy_elite_soldier_prototype;
    $enemy_elite_soldier->setName('Enemy elite soldier '.$i);
    echo $enemy_elite_soldier.'<br/>';
}

echo '<hr/>';

// Create 1000 enemy infantry soldiers
for($i = 0; $i < 1000; $i++) {
    $enemy_infantry_soldier = clone $enemy_infantry_soldier_prototype;
    $enemy_infantry_soldier->setName('Enemy infantry soldier '.$i);
    echo $enemy_infantry_soldier.'<br/>';
}
