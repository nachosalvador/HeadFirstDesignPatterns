<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Pepperoni;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Pepperoni\Pepperoni;

class SlicedPepperoni implements Pepperoni
{
    public function toString()
    {
        return 'Sliced pepperoni';
    }
}