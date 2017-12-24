<?php

require('../../../vendor/autoload.php');

use HeadFirstDesignPatterns\Iterator\DinerMerger\PancakeHouseMenu;
use HeadFirstDesignPatterns\Iterator\DinerMerger\DinerMenu;
use HeadFirstDesignPatterns\Iterator\DinerMerger\Waitress;

$pancakeHouseMenu = new PancakeHouseMenu();
$dinerMenu = new DinerMenu();

$waitress = new Waitress($pancakeHouseMenu, $dinerMenu);
$waitress->printMenu();