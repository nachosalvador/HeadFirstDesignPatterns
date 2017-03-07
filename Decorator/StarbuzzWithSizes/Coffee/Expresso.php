<?php

namespace HeadFirstDesignPatterns\Decorator\StarbuzzWithSizes\Coffee;

use HeadFirstDesignPatterns\Decorator\StarbuzzWithSizes\Coffee;

class Expresso extends Coffee
{
    public function __construct()
    {
        $this->description = 'Expresso';
    }
    
    public function cost()
    {
        return 1.99;
    }
}