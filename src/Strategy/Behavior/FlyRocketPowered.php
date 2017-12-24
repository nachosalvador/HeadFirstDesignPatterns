<?php

namespace HeadFirstDesignPatterns\Strategy\Behavior;

use HeadFirstDesignPatterns\Strategy\Behavior\FlyBehavior;

class FlyRocketPowered implements FlyBehavior
{
    public function fly()
    {
        print('I am flying with a rocket!!' . PHP_EOL);
    }
}