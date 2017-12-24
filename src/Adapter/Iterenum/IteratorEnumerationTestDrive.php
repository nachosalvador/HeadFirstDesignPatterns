<?php

require('../../../vendor/autoload.php');

use HeadFirstDesignPatterns\Adapter\Iterenum\CustomIterator;
use HeadFirstDesignPatterns\Adapter\Iterenum\IteratorEnumeration;

$iterator = new CustomIterator(['first', 'second', 'third']);
$enumeration = new IteratorEnumeration($iterator);

while ($enumeration->hasMoreElements()) {
    print($enumeration->nextElement() . PHP_EOL);
}