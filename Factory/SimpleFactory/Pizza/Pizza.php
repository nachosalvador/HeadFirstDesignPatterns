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