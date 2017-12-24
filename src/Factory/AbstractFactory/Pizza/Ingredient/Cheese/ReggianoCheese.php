<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Cheese;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Cheese\Cheese;

class ReggianoCheese implements Cheese
{
    public function toString()
    {
        return 'Reggiano cheese';
    }
}