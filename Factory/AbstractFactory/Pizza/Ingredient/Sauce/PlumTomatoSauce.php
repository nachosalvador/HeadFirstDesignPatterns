<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Sauce;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\Sauce\Sauce;

class PlumTomatoSauce implements Sauce
{
    public function toString()
    {
        return 'Tomato sauce with plum tomatoes';
    }
}