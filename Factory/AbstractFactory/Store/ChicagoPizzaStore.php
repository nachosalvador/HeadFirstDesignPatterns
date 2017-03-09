<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Store;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza;
use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\ChicagoPizzaIngredientFactory;
use HeadFirstDesignPatterns\Factory\AbstractFactory\Store\PizzaStore;

class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        $pizza = null;
        $ingredientFactory = new ChicagoPizzaIngredientFactory();

        if ($type == "cheese") {
            $pizza = new Pizza\CheesePizza($ingredientFactory);
            $pizza->setName('Chicago Style Cheese Pizza');
        } elseif ($type == "veggie") {
            $pizza = new Pizza\VeggiePizza($ingredientFactory);
            $pizza->setName('Chicago Style Veggie Pizza');
        } elseif ($type == "clam") {
            $pizza = new Pizza\ClamPizza($ingredientFactory);
            $pizza->setName('Chicago Style Clam Pizza');
        } elseif ($type == "pepperoni") {
            $pizza = new Pizza\PepperoniPizza($ingredientFactory);
            $pizza->setName('Chicago Style Pepperoni Pizza');
        }

        return $pizza;
    }
}