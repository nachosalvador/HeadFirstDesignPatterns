<?php

namespace HeadFirstDesignPatterns\Factory\SimpleFactory\Pizza;

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = array();

    public function getName()
    {
        return $this->name;
    }

    public function prepare()
    {
        print('Preparing ' . $this->name . PHP_EOL);
        print('Tossing dough...' . PHP_EOL);
        print('Adding sauce...' . PHP_EOL);
        print('Adding toppings:' . PHP_EOL);

        foreach ($this->toppings as $topping) {
            print('     ' . $topping . PHP_EOL);
        }
    }

    public function bake()
    {
        print('Baking ' . $this->name . PHP_EOL);
    }

    public function cut()
    {
        print('Cutting ' . $this->name . PHP_EOL);
    }
 
    public function box()
    {
        print('Boxing ' . $this->name . PHP_EOL);
    }
}