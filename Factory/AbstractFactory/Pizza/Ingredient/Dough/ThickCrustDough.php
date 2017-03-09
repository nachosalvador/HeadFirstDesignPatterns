<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Dough;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Dough\Dough;

class ThickCrustDough implements Dough
{
    public function toString()
    {
        return 'ThickCrust style extra thick crust dough';
    }
}