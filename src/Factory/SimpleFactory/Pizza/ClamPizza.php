<?php

namespace HeadFirstDesignPatterns\Factory\SimpleFactory\Pizza;

use HeadFirstDesignPatterns\Factory\SimpleFactory\Pizza\Pizza;

class ClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name  = 'Clam Pizza';
        $this->dough = 'Thin crust';
        $this->sauce = 'White garlic sauce';
        $this->toppings[] = 'Clams';
        $this->toppings[] = 'Grated parmesan cheese';
    }
}