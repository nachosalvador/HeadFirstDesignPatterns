<?php

namespace HeadFirstDesignPatterns\Strategy\Behavior;

use HeadFirstDesignPatterns\Strategy\Behavior\QuackBehavior;

class Quack implements QuackBehavior
{
    public function quack()
    {
        print('Quack!!' . PHP_EOL);
    }
}