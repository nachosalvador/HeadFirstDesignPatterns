<?php

require('../../../vendor/autoload.php');

use HeadFirstDesignPatterns\Iterator\DinerMergerCafe\PancakeHouseMenu;
use HeadFirstDesignPatterns\Iterator\DinerMergerCafe\DinerMenu;
use HeadFirstDesignPatterns\Iterator\DinerMergerCafe\CafeMenu;
use HeadFirstDesignPatterns\Iterator\DinerMergerCafe\Waitress;

$pancakeHouseMenu = new PancakeHouseMenu();
$dinerMenu = new DinerMenu();
$cafeMenu = new CafeMenu();

$waitress = new Waitress($pancakeHouseMenu, $dinerMenu, $cafeMenu);
$waitress->printMenu();
$waitress->printVegetarianMenu();

print('Customer asks, is the Hotdog vegetarian?' . PHP_EOL);
print('Waitress says:' . PHP_EOL);

if ($waitress->isItemVegetarian('Hotdog')) {
    print('Yes' . PHP_EOL);
} else {
    print('No' . PHP_EOL);
}

print('Customer asks, are the Waffles vegetarian?' . PHP_EOL);
print('Waitress says:' . PHP_EOL);

if ($waitress->isItemVegetarian('Waffles')) {
    print('Yes' . PHP_EOL);
} else {
    print('No' . PHP_EOL);
}