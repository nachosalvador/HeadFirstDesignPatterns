<?php

namespace HeadFirstDesignPatterns\Factory\FactoryMethod\Pizza;

use HeadFirstDesignPatterns\Factory\FactoryMethod\Pizza\Pizza;

class ChicagoStyleClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name  = 'Chicago Style Clam Pizza';
        $this->dough = 'Extra thick crust dough';
        $this->sauce = 'Plum tomato sauce';
        $this->toppings[] = 'Shredded mozzarella cheese';
        $this->toppings[] = 'Frozen clams from Chesapeake Bay';
    }

    public function cut()
    {
        print('Cutting the pizza into square slices' . PHP_EOL);
    }
}