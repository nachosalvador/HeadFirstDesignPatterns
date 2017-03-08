<?php

namespace HeadFirstDesignPatterns\Factory\FactoryMethod\Pizza;

use HeadFirstDesignPatterns\Factory\FactoryMethod\Pizza\Pizza;

class NYStyleClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name  = 'NY Style Clam Pizza';
        $this->dough = 'Thin crust dough';
        $this->sauce = 'Marinara sauce';
        $this->toppings[] = 'Grated reggiano cheese';
        $this->toppings[] = 'Fresh clams from Long Island Sound';
    }
}