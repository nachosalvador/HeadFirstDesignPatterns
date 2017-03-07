<?php

namespace HeadFirstDesignPatterns\Factory\SimpleFactory\Pizza;

use HeadFirstDesignPatterns\Factory\SimpleFactory\Pizza\Pizza;

class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name  = 'Pepperoni Pizza';
        $this->dough = 'Crust';
        $this->sauce = 'Marinara sauce';
        $this->toppings[] = 'Sliced pepperoni';
        $this->toppings[] = 'Sliced onion';
        $this->toppings[] = 'Grated parmesan cheese';
    }
}