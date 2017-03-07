<?php

namespace HeadFirstDesignPatterns\Decorator\Starbuzz\Condiment;

use HeadFirstDesignPatterns\Decorator\Starbuzz\CondimentDecorator;

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