<?php

namespace HeadFirstDesignPatterns\Factory\FactoryMethod\Pizza;

use HeadFirstDesignPatterns\Factory\FactoryMethod\Pizza\Pizza;

class NYStyleVeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name  = 'NY Style Pepperoni Pizza';
        $this->dough = 'Thin crust dough';
        $this->sauce = 'Marinara sauce';
        $this->toppings[] = 'Grated reggiano cheese';
        $this->toppings[] = 'Garlic';
        $this->toppings[] = 'Onion';
        $this->toppings[] = 'Mushrooms';
        $this->toppings[] = 'Red pepper';
    }
}