<?php

namespace HeadFirstDesignPatterns\Factory\FactoryMethod\Pizza;

use HeadFirstDesignPatterns\Factory\FactoryMethod\Pizza\Pizza;

class NYStyleCheesePizza	extends Pizza
{
    public function __construct()
    {
        $this->name  = 'NY Style Sauce and Cheese Pizza';
        $this->dough = 'Thin crust dough';
        $this->sauce = 'Marinara sauce';
        $this->toppings[] = 'Grated reggiano cheese';
    }
}