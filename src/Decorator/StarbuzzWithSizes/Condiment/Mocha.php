<?php

namespace HeadFirstDesignPatterns\Decorator\StarbuzzWithSizes\Condiment;

use HeadFirstDesignPatterns\Decorator\StarbuzzWithSizes\CondimentDecorator;

class Mocha extends CondimentDecorator
{
    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Mocha';
    }
    
    public function cost()
    {
        return $this->beverage->cost() + 0.20;
    }
}