<?php

namespace HeadFirstDesignPatterns\Factory\FactoryMethod\Store;

abstract class PizzaStore
{
    public function orderPizza($type)
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    abstract protected function createPizza($type);
}