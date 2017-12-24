<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza;

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $cheese;
    protected $clam;
    protected $pepperoni;
    protected $veggies = array();

    abstract function prepare();

    public function getName()
    {
        return $this->name;
    }

    public function bake()
    {
        print('Bake for 25 minutes at 350' . PHP_EOL);
    }

    public function cut()
    {
        print('Cutting the pizza into diagonal slices' . PHP_EOL);
    }
 
    public function box()
    {
        print('Place pizza in official PizzaStore box' . PHP_EOL);
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}