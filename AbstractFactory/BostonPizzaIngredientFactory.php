<?php

class BostonPizzaIngredientFactory implements PizzaIngredientFactoryInterface {

    public function __construct()
    {
        echo '<h2>Making a Boston pizza!</h2>';
    }

    public function createCheese()
    {
        return new BostonCheese();
    }

    public function createSauce()
    {
        return new BostonSauce();
    }

    public function createDough()
    {
        return new BostonDough();
    }

}