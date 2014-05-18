<?php

require_once('PizzaIngredientFactoryInterface.php');
require_once('NyPizzaIngredientFactory.php');
require_once('BostonPizzaIngredientFactory.php');
require_once('NyDough.php');
require_once('NyCheese.php');
require_once('NySauce.php');
require_once('BostonDough.php');
require_once('BostonSauce.php');
require_once('BostonCheese.php');

$ny_pizza = new NyPizzaIngredientFactory();
$ny_pizza->createDough();
$ny_pizza->createSauce();
$ny_pizza->createCheese();


$boston_pizza = new BostonPizzaIngredientFactory();
$boston_pizza->createDough();
$boston_pizza->createSauce();
$boston_pizza->createCheese();