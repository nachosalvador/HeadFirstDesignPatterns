<?php

require('../../vendor/autoload.php');

use HeadFirstDesignPatterns\Factory\FactoryMethod\Store\NYPizzaStore;
use HeadFirstDesignPatterns\Factory\FactoryMethod\Store\ChicagoPizzaStore;

$NYStore = new NYPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$pizza = $NYStore->orderPizza('cheese');
print('Ethan ordered a ' . $pizza->getName() . PHP_EOL);

$pizza = $chicagoStore->orderPizza('cheese');
print('Joel ordered a ' . $pizza->getName() . PHP_EOL);

$pizza = $NYStore->orderPizza('clam');
print('Ethan ordered a ' . $pizza->getName() . PHP_EOL);

$pizza = $chicagoStore->orderPizza('clam');
print('Joel ordered a ' . $pizza->getName() . PHP_EOL);

$pizza = $NYStore->orderPizza('pepperoni');
print('Ethan ordered a ' . $pizza->getName() . PHP_EOL);

$pizza = $chicagoStore->orderPizza('pepperoni');
print('Joel ordered a ' . $pizza->getName() . PHP_EOL);

$pizza = $NYStore->orderPizza('veggie');
print('Ethan ordered a ' . $pizza->getName() . PHP_EOL);

$pizza = $chicagoStore->orderPizza('veggie');
print('Joel ordered a ' . $pizza->getName() . PHP_EOL);