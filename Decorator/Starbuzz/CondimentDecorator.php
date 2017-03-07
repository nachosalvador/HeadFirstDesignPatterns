<?php

namespace HeadFirstDesignPatterns\Decorator\Starbuzz;

use HeadFirstDesignPatterns\Decorator\Starbuzz\Beverage;

abstract class CondimentDecorator implements Beverage
{
	protected $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
}