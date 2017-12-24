<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Clams;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Clams\Clams;

class FreshClams implements Clams
{
    public function toString()
    {
        return 'Fresh clams from Long Island Sound';
    }
}