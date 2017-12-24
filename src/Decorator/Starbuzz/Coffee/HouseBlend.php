<?php

namespace HeadFirstDesignPatterns\Decorator\Starbuzz\Coffee;

use HeadFirstDesignPatterns\Decorator\Starbuzz\Coffee;

class HouseBlend extends Coffee
{
    public function __construct()
    {
        $this->description = 'House Blend Coffee';
    }
    
    public function cost()
    {
        return 0.89;
    }
}