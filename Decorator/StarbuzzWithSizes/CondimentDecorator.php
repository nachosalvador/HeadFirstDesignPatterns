<?php

namespace HeadFirstDesignPatterns\Decorator\StarbuzzWithSizes;

use HeadFirstDesignPatterns\Decorator\StarbuzzWithSizes\Beverage;

abstract class CondimentDecorator implements Beverage
{
	protected $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
}