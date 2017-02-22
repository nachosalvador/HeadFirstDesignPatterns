<?php

namespace HeadFirstDesignPatterns\Strategy\Behavior;

use HeadFirstDesignPatterns\Strategy\Behavior\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        print('I cannot fly.' . PHP_EOL);
    }
}