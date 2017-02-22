<?php

namespace HeadFirstDesignPatterns\Strategy\Behavior;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        print('<<Silence>>' . PHP_EOL);
    }
}