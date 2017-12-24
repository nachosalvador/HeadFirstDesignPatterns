<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Veggie;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Veggie\Veggie;

class Spinach implements Veggie
{
    public function toString()
    {
        return 'Spinach';
    }
}