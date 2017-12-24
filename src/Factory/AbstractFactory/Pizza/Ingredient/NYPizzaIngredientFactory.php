<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Cheese;
use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Clams;
use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Dough;
use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Pepperoni;
use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\PizzaIngredientFactory;
use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Sauce;
use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Veggie;

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough()
    {
        return new Dough\ThickCrustDough();
    }

    public function createSauce()
    {
        return new Sauce\MarinaraSauce();
    }

    public function createCheese()
    {
        return new Cheese\ReggianoCheese();
    }

    public function createVeggies()
    {
        return array(
            new Veggie\Garlic(),
            new Veggie\Onion(),
            new Veggie\Mushroom(),
            new Veggie\RedPepper()
        );
    }

    public function createPepperoni()
    {
        return new Pepperoni\SlicedPepperoni();
    }

    public function createClam()
    {
        return new Clams\FreshClams();
    }
}