<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Store;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza;
use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\NYPizzaIngredientFactory;
use HeadFirstDesignPatterns\Factory\AbstractFactory\Store\PizzaStore;

class NYPizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        $pizza = null;
        $ingredientFactory = new NYPizzaIngredientFactory();

        if ($type == "cheese") {
            $pizza = new Pizza\CheesePizza($ingredientFactory);
            $pizza->setName('New York Style Cheese Pizza');
        } elseif ($type == "veggie") {
            $pizza = new Pizza\VeggiePizza($ingredientFactory);
            $pizza->setName('New York Style Veggie Pizza');
        } elseif ($type == "clam") {
            $pizza = new Pizza\ClamPizza($ingredientFactory);
            $pizza->setName('New York Style Clam Pizza');
        } elseif ($type == "pepperoni") {
            $pizza = new Pizza\PepperoniPizza($ingredientFactory);
            $pizza->setName('New York Style Pepperoni Pizza');
        }

        return $pizza;
    }
}