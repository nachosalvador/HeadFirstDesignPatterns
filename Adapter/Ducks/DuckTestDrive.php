<?php

require('../../vendor/autoload.php');

use HeadFirstDesignPatterns\Adapter\Ducks\Duck;
use HeadFirstDesignPatterns\Adapter\Ducks\MallardDuck;
use HeadFirstDesignPatterns\Adapter\Ducks\WildTurkey;
use HeadFirstDesignPatterns\Adapter\Ducks\TurkeyAdapter;

$duck = new MallardDuck();

$turkey = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter($turkey);

print('The turkey says...' . PHP_EOL);
$turkey->gobble();
$turkey->fly();

print('The duck says...' . PHP_EOL);
testDuck($duck);

print('The TurkeyAdapter says...' . PHP_EOL);
testDuck($turkeyAdapter);

function testDuck(Duck $duck)
{
    $duck->quack();
    $duck->fly();
}