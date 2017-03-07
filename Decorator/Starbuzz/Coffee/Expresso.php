<?php

namespace HeadFirstDesignPatterns\Decorator\Starbuzz\Coffee;

use HeadFirstDesignPatterns\Decorator\Starbuzz\Coffee;

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