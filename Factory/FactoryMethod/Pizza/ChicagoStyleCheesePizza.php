<?php

namespace HeadFirstDesignPatterns\Factory\FactoryMethod\Pizza;

use HeadFirstDesignPatterns\Factory\FactoryMethod\Pizza\Pizza;

class ChicagoStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name  = 'Chicago Style Deep Dish Cheese Pizza';
        $this->dough = 'Extra thick crust dough';
        $this->sauce = 'Plum tomato sauce';
        $this->toppings[] = 'Shredded mozzarella cheese';
    }

    public function cut()
    {
        print('Cutting the pizza into square slices' . PHP_EOL);
    }
}