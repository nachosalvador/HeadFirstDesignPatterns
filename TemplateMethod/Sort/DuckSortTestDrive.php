<?php

require('../../vendor/autoload.php');

use HeadFirstDesignPatterns\TemplateMethod\Sort\Comparable;
use HeadFirstDesignPatterns\TemplateMethod\Sort\Duck;

$ducks = [
    new Duck("Daffy", 8),
    new Duck("Dewey", 2),
    new Duck("Howard", 7),
    new Duck("Louie", 2),
    new Duck("Donald", 10),
    new Duck("Huey", 2)
];

print('Before sorting:' . PHP_EOL);
display($ducks);

usort($ducks, 'sortDucks');

print('After sorting:' . PHP_EOL);
display($ducks);

function display($ducks)
{
    foreach ($ducks as $duck) {
        $duck->toString();
    }
}

function sortDucks(Comparable $duck1, Comparable $duck2)
{
    return $duck1->compareTo($duck2);
}