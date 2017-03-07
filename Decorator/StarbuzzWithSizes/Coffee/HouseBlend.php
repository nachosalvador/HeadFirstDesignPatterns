<?php

namespace HeadFirstDesignPatterns\Decorator\StarbuzzWithSizes\Coffee;

use HeadFirstDesignPatterns\Decorator\StarbuzzWithSizes\Coffee;

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