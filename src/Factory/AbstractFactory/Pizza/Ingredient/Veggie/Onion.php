<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Veggie;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Veggie\Veggie;

class Onion implements Veggie
{
    public function toString()
    {
        return 'Onion';
    }
}