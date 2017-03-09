<?php

require('../../vendor/autoload.php');

use HeadFirstDesignPatterns\Factory\SimpleFactory\PizzaStore;
use HeadFirstDesignPatterns\Factory\SimpleFactory\SimplePizzaFactory;

$factory = new SimplePizzaFactory();
$store = new PizzaStore($factory);

$pizza = $store->orderPizza('cheese');
print('We ordered a ' . $pizza->getName() . "\n\n");

$pizza = $store->orderPizza('veggie');
print('We ordered a ' . $pizza->getName() . "\n\n");

$pizza = $store->orderPizza('clam');
print('We ordered a ' . $pizza->getName() . "\n\n");

$pizza = $store->orderPizza('pepperoni');
print('We ordered a ' . $pizza->getName() . "\n\n");