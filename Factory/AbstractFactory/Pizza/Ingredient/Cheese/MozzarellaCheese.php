<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Cheese;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Cheese\Cheese;

class MozzarellaCheese implements Cheese
{
    public function toString()
    {
        return 'Shredded mozzarella';
    }
}