<?php

namespace HeadFirstDesignPatterns\Factory\FactoryMethod\Pizza;

use HeadFirstDesignPatterns\Factory\FactoryMethod\Pizza\Pizza;

class ChicagoStylePepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name  = 'Chicago Style Pepperoni Pizza';
        $this->dough = 'Extra thick crust dough';
        $this->sauce = 'Plum tomato sauce';
        $this->toppings[] = 'Shredded mozzarella cheese';
        $this->toppings[] = 'Black olives';
        $this->toppings[] = 'Spinach';
        $this->toppings[] = 'Eggplant';
        $this->toppings[] = 'Sliced Pepperoni';
    }

    public function cut()
    {
        print('Cutting the pizza into square slices' . PHP_EOL);
    }
}