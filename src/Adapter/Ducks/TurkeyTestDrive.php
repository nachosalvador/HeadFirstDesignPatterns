<?php

require('../../../vendor/autoload.php');

use HeadFirstDesignPatterns\Adapter\Ducks\DuckAdapter;
use HeadFirstDesignPatterns\Adapter\Ducks\MallardDuck;

$duck = new MallardDuck();
$duckAdapter = new DuckAdapter($duck);

for ($i = 0; $i < 10; $i++) {
    print('The DuckAdapter says...' . PHP_EOL);
    $duckAdapter->gobble();
    $duckAdapter->fly();
}