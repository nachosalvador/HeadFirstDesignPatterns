<?php

namespace HeadFirstDesignPatterns\Iterator\DinerMerger;

use HeadFirstDesignPatterns\Iterator\DinerMerger\Iterator;
use HeadFirstDesignPatterns\Iterator\DinerMerger\Menu;

class Waitress
{
    private $pancakeHouseMenu;
    private $dinerMenu;

    public function __construct(Menu $pancakeHouseMenu, Menu $dinerMenu)
    {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
    }

    public function printMenu(Iterator $iterator = null)
    {
        if ($iterator == null) {
            $pancakeIterator = $this->pancakeHouseMenu->createIterator();
            $dinerIterator = $this->dinerMenu->createIterator();

            print('MENU' . PHP_EOL . '----' . PHP_EOL . 'BREAKFAST' .PHP_EOL);
            $this->printMenu($pancakeIterator);
            print('LUNCH' . PHP_EOL);
            $this->printMenu($dinerIterator);
        } else {
            while ($iterator->hasNext()) {
                $menuItem = $iterator->next();
                print($menuItem->getName() . ', ');
                print($menuItem->getPrice() . ' -- ');
                print($menuItem->getDescription() . PHP_EOL);
            }
        }
    }
}