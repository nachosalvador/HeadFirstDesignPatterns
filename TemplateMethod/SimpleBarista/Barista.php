<?php

require('../../vendor/autoload.php');

use HeadFirstDesignPatterns\TemplateMethod\SimpleBarista\Coffee;
use HeadFirstDesignPatterns\TemplateMethod\SimpleBarista\Tea;

$coffee = new Coffee();
$tea = new Tea();

print('Making a coffee...' . PHP_EOL);
$coffee->prepareRecipe();

print('Making a tea...' . PHP_EOL);
$tea->prepareRecipe();