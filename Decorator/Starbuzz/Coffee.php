<?php

namespace HeadFirstDesignPatterns\Decorator\Starbuzz;

use HeadFirstDesignPatterns\Decorator\Starbuzz\Beverage;

abstract class Coffee implements Beverage
{
    protected $description = 'Unknow Beverage';

    public function getDescription()
    {
        return $this->description;
    }
}