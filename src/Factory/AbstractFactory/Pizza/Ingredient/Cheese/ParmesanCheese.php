<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Cheese;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Cheese\Cheese;

class ParmesanCheese implements Cheese
{
    public function toString()
    {
        return 'Shredded parmesan';
    }
}