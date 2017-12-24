<?php

namespace HeadFirstDesignPatterns\Factory\FactoryMethod\Pizza;

use HeadFirstDesignPatterns\Factory\FactoryMethod\Pizza\Pizza;

class NYStylePepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name  = 'NY Style Pepperoni Pizza';
        $this->dough = 'Thin crust dough';
        $this->sauce = 'Marinara sauce';
        $this->toppings[] = 'Grated reggiano cheese';
        $this->toppings[] = 'Sliced pepperoni';
        $this->toppings[] = 'Garlic';
        $this->toppings[] = 'Onion';
        $this->toppings[] = 'Mushrooms';
        $this->toppings[] = 'Red pepper';
    }
}