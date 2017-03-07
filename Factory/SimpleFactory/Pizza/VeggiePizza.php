<?php

namespace HeadFirstDesignPatterns\Factory\SimpleFactory\Pizza;

use HeadFirstDesignPatterns\Factory\SimpleFactory\Pizza\Pizza;

class VeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name  = 'Veggie Pizza';
        $this->dough = 'Crust';
        $this->sauce = 'Marinara sauce';
        $this->toppings[] = 'Shredded mozzarella';
        $this->toppings[] = 'Grated parmesan';
        $this->toppings[] = 'Diced onion';
        $this->toppings[] = 'Sliced mushrooms';
        $this->toppings[] = 'Sliced red pepper';
        $this->toppings[] = 'Sliced black olives';
    }
}