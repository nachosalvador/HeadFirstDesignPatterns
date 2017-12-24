<?php

namespace HeadFirstDesignPatterns\Adapter\Ducks;

use HeadFirstDesignPatterns\Adapter\Ducks\Duck;

class MallardDuck implements Duck
{
    public function fly()
    {
        print('I\'m  flying' . PHP_EOL);
    }

    public function quack()
    {
        print('Quack' . PHP_EOL);
    }
}