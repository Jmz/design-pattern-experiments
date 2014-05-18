<?php

class NyPizzaIngredientFactory implements PizzaIngredientFactoryInterface {

    public function __construct()
    {
        echo '<h2>Making a New York pizza!</h2>';
    }

    public function createCheese()
    {
        return new NyCheese();
    }

    public function createSauce()
    {
        return new NySauce();
    }

    public function createDough()
    {
        return new NyDough();
    }

}