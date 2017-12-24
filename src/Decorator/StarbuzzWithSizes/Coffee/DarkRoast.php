<?php

namespace HeadFirstDesignPatterns\Decorator\StarbuzzWithSizes\Coffee;

use HeadFirstDesignPatterns\Decorator\StarbuzzWithSizes\Coffee;

class DarkRoast extends Coffee
{
    public function __construct()
    {
        $this->description = 'Dark Roast Coffee';
    }
    
    public function cost()
    {
        return 0.99;
    }
}