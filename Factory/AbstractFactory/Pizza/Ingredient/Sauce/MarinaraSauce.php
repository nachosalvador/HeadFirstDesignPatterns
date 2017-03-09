<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Sauce;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Sauce\Sauce;

class MarinaraSauce implements Sauce
{
    public function toString()
    {
        return 'Marinara sauce';
    }
}