<?php

require('../../../vendor/autoload.php');

use HeadFirstDesignPatterns\TemplateMethod\Barista\Coffee;
use HeadFirstDesignPatterns\TemplateMethod\Barista\Tea;
use HeadFirstDesignPatterns\TemplateMethod\Barista\CoffeeWithHook;
use HeadFirstDesignPatterns\TemplateMethod\Barista\TeaWithHook;

$coffee = new Coffee();
$tea = new Tea();

print('Making a coffee...' . PHP_EOL);
$coffee->prepareRecipe();

print('Making a tea...' . PHP_EOL);
$tea->prepareRecipe();

$coffeeHook = new CoffeeWithHook();
$teaHook = new TeaWithHook();

print('Making a coffee...' . PHP_EOL);
$coffeeHook->prepareRecipe();

print('Making a tea...' . PHP_EOL);
$teaHook->prepareRecipe();