<?php

require('../../../vendor/autoload.php');

use HeadFirstDesignPatterns\Decorator\Starbuzz\Coffee;
use HeadFirstDesignPatterns\Decorator\Starbuzz\Condiment;

$expresso = new Coffee\Expresso();
print($expresso->getDescription() . ' $' . $expresso->cost() . PHP_EOL);

$darkRoast = new Coffee\DarkRoast();
$darkRoast = new Condiment\Mocha($darkRoast);
$darkRoast = new Condiment\Mocha($darkRoast);
$darkRoast = new Condiment\Whip($darkRoast);
print($darkRoast->getDescription() . ' $' . $darkRoast->cost() . PHP_EOL);

$houseBlend = new Coffee\HouseBlend();
$houseBlend = new Condiment\Soy($houseBlend);
$houseBlend = new Condiment\Mocha($houseBlend);
$houseBlend = new Condiment\Whip($houseBlend);
print($houseBlend->getDescription() . ' $' . $houseBlend->cost() . PHP_EOL);