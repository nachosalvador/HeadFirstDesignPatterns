<?php

require('../../vendor/autoload.php');

use HeadFirstDesignPatterns\Iterator\DinerMergeri\PancakeHouseMenu;
use HeadFirstDesignPatterns\Iterator\DinerMergeri\DinerMenu;
use HeadFirstDesignPatterns\Iterator\DinerMergeri\Waitress;

$pancakeHouseMenu = new PancakeHouseMenu();
$dinerMenu = new DinerMenu();

$waitress = new Waitress($pancakeHouseMenu, $dinerMenu);
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