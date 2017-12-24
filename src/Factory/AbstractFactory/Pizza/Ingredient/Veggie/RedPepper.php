<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Veggie;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Veggie\Veggie;

class RedPepper implements Veggie
{
    public function toString()
    {
        return 'Red pepper';
    }
}