<?php

namespace HeadFirstDesignPatterns\Strategy\Behavior;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        print('Squeak!!' . PHP_EOL);
    }
}