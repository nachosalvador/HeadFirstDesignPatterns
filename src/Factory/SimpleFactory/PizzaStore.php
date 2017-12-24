<?php

namespace HeadFirstDesignPatterns\Factory\SimpleFactory;

use HeadFirstDesignPatterns\Factory\SimpleFactory\SimplePizzaFactory;

class PizzaStore
{
    private $factory;

    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    public function orderPizza($type)
    {
        $pizza = $this->factory->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}