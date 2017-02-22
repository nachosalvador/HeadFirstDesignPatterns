<?php

namespace HeadFirstDesignPatterns\Strategy\Behavior;

use HeadFirstDesignPatterns\Strategy\Behavior\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        print('I am flying!!' . PHP_EOL);
    }
}