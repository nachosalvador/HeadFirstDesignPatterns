<?php

namespace HeadFirstDesignPatterns\Decorator\Starbuzz\Coffee;

use HeadFirstDesignPatterns\Decorator\Starbuzz\Coffee;

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