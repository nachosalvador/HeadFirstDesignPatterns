<?php

require('../../../vendor/autoload.php');

use HeadFirstDesignPatterns\Adapter\Iterenum\CustomEnumeration;
use HeadFirstDesignPatterns\Adapter\Iterenum\EnumerationIterator;

$enumeration = new CustomEnumeration(['first', 'second', 'third']);
$iterator = new EnumerationIterator($enumeration);

while ($iterator->hasNext()) {
    print($iterator->next() . PHP_EOL);
}