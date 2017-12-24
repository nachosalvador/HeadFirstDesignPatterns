<?php

namespace HeadFirstDesignPatterns\Decorator\StarbuzzWithSizes\Condiment;

use HeadFirstDesignPatterns\Decorator\StarbuzzWithSizes\CondimentDecorator;

class Whip extends CondimentDecorator
{
    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Whip';
    }
    
    public function cost()
    {
        return $this->beverage->cost() + 0.10;
    }
}