<?php

namespace HeadFirstDesignPatterns\Factory\SimpleFactory\Pizza;

use HeadFirstDesignPatterns\Factory\SimpleFactory\Pizza\Pizza;

class CheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name  = 'Cheese Pizza';
        $this->dough = 'Regular crust';
        $this->sauce = 'Marinara pizza sauce';
        $this->toppings[] = 'Fresh mozzarella';
        $this->toppings[] = 'Parmesan';
    }
}