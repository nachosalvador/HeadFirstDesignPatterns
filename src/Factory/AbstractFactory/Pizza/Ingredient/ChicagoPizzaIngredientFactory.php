<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Cheese;
use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Clams;
use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Dough;
use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Pepperoni;
use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\PizzaIngredientFactory;
use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Sauce;
use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Veggie;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough()
    {
        return new Dough\ThickCrustDough();
    }

    public function createSauce()
    {
        return new Sauce\PlumTomatoSauce();
    }

    public function createCheese()
    {
        return new Cheese\MozzarellaCheese();
    }

    public function createVeggies()
    {
        return array(
            new Veggie\BlackOlives(),
            new Veggie\Spinach(),
            new Veggie\Eggplant()
        );
    }

    public function createPepperoni()
    {
        return new Pepperoni\SlicedPepperoni();
    }

    public function createClam()
    {
        return new Clams\FrozenClams();
    }
}