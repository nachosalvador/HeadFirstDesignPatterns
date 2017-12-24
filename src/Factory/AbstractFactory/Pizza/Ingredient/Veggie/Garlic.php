<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Veggie;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Veggie\Veggie;

class Garlic implements Veggie
{
    public function toString()
    {
        return 'Garlic';
    }
}