<?php

namespace HeadFirstDesignPatterns\Decorator\StarbuzzWithSizes\Condiment;

use HeadFirstDesignPatterns\Decorator\StarbuzzWithSizes\CondimentDecorator;
use HeadFirstDesignPatterns\Decorator\StarbuzzWithSizes\Size;

class Soy extends CondimentDecorator
{
    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Soy';
    }
    
    public function cost()
    {
        if ($this->beverage->getSize() == Size::TALL) {
            $cost = $this->beverage->cost() + 0.10;
        } elseif ($this->beverage->getSize() == Size::GRANDE) {
            $cost = $this->beverage->cost() + 0.15;
        } elseif ($this->beverage->getSize() == Size::VENTI) {
            $cost = $this->beverage->cost() + 0.20;
        }

        return $cost;
    }
}