<?php

namespace HeadFirstDesignPatterns\Factory\FactoryMethod\Store;

use HeadFirstDesignPatterns\Factory\FactoryMethod\Pizza;
use HeadFirstDesignPatterns\Factory\FactoryMethod\Store\PizzaStore;

class NYPizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        $pizza = null;

        if ($type == "cheese") {
            $pizza = new Pizza\NYStyleCheesePizza();
        } elseif ($type == "veggie") {
            $pizza = new Pizza\NYStyleVeggiePizza();
        } elseif ($type == "clam") {
            $pizza = new Pizza\NYStyleClamPizza();
        } elseif ($type == "pepperoni") {
            $pizza = new Pizza\NYStylePepperoniPizza();
        }

        return $pizza;
    }
}