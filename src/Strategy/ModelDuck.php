<?php

namespace HeadFirstDesignPatterns\Strategy;

use HeadFirstDesignPatterns\Strategy\Behavior\FlyNoWay;
use HeadFirstDesignPatterns\Strategy\Behavior\Quack;
use HeadFirstDesignPatterns\Strategy\Duck;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        print('I am a model duck.' . PHP_EOL);
    }
}