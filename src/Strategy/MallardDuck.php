<?php

namespace HeadFirstDesignPatterns\Strategy;

use HeadFirstDesignPatterns\Strategy\Behavior\FlyWithWings;
use HeadFirstDesignPatterns\Strategy\Behavior\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        print('I am a real MallardDuck.' . PHP_EOL);
    }
}