<?php

class BostonPizzaIngredientFactory implements PizzaIngredientFactoryInterface {

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