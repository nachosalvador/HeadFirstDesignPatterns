<?php

namespace HeadFirstDesignPatterns\Factory\SimpleFactory;

use HeadFirstDesignPatterns\Factory\SimpleFactory\Pizza;

class SimplePizzaFactory
{
    public function createPizza($type)
    {
        $pizza = null;

        if ($type == 'cheese') {
            $pizza = new Pizza\CheesePizza();
        } elseif ($type == 'pepperoni') {
            $pizza = new Pizza\PepperoniPizza();
        } elseif ($type == 'clam') {
            $pizza = new Pizza\ClamPizza();
        } elseif ($type == 'veggie') {
            $pizza = new Pizza\VeggiePizza();
        }

        return $pizza;
    }
}