<?php

class NyPizzaIngredientFactory implements PizzaIngredientFactoryInterface {

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