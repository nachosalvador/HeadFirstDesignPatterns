<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Clams;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Clams\Clams;

class FrozenClams implements Clams
{
    public function toString()
    {
        return 'Frozen clams from Chesapeake Bay';
    }
}