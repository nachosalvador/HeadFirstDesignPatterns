<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Veggie;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Veggie\Veggie;

class BlackOlives implements Veggie
{
    public function toString()
    {
        return 'Black olives';
    }
}