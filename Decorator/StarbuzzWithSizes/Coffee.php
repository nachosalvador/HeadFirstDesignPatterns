<?php

namespace HeadFirstDesignPatterns\Decorator\StarbuzzWithSizes;

use HeadFirstDesignPatterns\Decorator\StarbuzzWithSizes\Beverage;

abstract class Coffee implements Beverage
{
	protected $size;
    protected $description = 'Unknow Beverage';

    public function __construct()
    {
        $this->size = new Size(Size::TALL);
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getSize()
    {
        return $this->size->getValue();
    }

    public function setSize(Size $size)
    {
        $this->size = $size;
    }
}