<?php

namespace HeadFirstDesignPatterns\Factory\FactoryMethod\Pizza;

use HeadFirstDesignPatterns\Factory\FactoryMethod\Pizza\Pizza;

class ChicagoStyleVeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name  = 'Chicago Deep Dish Veggie Pizza';
        $this->dough = 'Extra thick crust dough';
        $this->sauce = 'Plum tomato sauce';
        $this->toppings[] = 'Shredded mozzarella cheese';
        $this->toppings[] = 'Black olives';
        $this->toppings[] = 'Spinach';
        $this->toppings[] = 'Eggplant';
    }

    public function cut()
    {
        print('Cutting the pizza into square slices' . PHP_EOL);
    }
}