<?php

require('../../vendor/autoload.php');

use HeadFirstDesignPatterns\Singleton\ChocolateBoiler;

$boiler = ChocolateBoiler::getInstance();
$boiler->fill();
$boiler->boil();
$boiler->drain();

// will return the existing instance
$boiler2 = ChocolateBoiler::getInstance();