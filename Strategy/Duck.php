<?php

namespace HeadFirstDesignPatterns\Strategy;

use HeadFirstDesignPatterns\Strategy\Behavior\FlyBehavior;
use HeadFirstDesignPatterns\Strategy\Behavior\QuackBehavior;

abstract class Duck
{
    protected $flyBehavior;
    protected $quackBehavior;

    abstract protected function display();

    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function swim()
    {
        print('All ducks float, even decoys!' . PHP_EOL);
    }
}