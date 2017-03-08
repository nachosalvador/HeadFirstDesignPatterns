<?php

namespace HeadFirstDesignPatterns\Factory\FactoryMethod\Store;

use HeadFirstDesignPatterns\Factory\FactoryMethod\Store\PizzaStore;
use HeadFirstDesignPatterns\Factory\FactoryMethod\Pizza;

class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        $pizza = null;

        if ($type == "cheese") {
            $pizza = new Pizza\ChicagoStyleCheesePizza();
        } elseif ($type == "veggie") {
            $pizza = new Pizza\ChicagoStyleVeggiePizza();
        } elseif ($type == "clam") {
            $pizza = new Pizza\ChicagoStyleClamPizza();
        } elseif ($type == "pepperoni") {
            $pizza = new Pizza\ChicagoStylePepperoniPizza();
        }

        return $pizza;
    }
}