<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Dough;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Dough\Dough;

class ThinCrustDough implements Dough
{
    public function toString()
    {
        return 'Thin crust dough';
    }
}