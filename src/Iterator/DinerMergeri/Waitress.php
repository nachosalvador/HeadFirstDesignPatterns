<?php

namespace HeadFirstDesignPatterns\Iterator\DinerMergeri;

use HeadFirstDesignPatterns\Iterator\DinerMergeri\Menu;

class Waitress
{
    private $pancakeHouseMenu;
    private $dinerMenu;

    public function __construct(Menu $pancakeHouseMenu, Menu $dinerMenu)
    {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
    }

    public function printMenu(\Iterator $iterator = null)
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
 
    public function printVegetarianMenu(\Iterator $iterator = null)
    {
        if ($iterator == null) {
            print('VEGETARIAN MENU' . PHP_EOL . '----------------' . PHP_EOL . 'BREAKFAST' .PHP_EOL);
            $this->printVegetarianMenu($this->pancakeHouseMenu->createIterator());
            print('LUNCH' . PHP_EOL);
            $this->printVegetarianMenu($this->dinerMenu->createIterator());
        } else {
            while ($iterator->hasNext()) {
                $menuItem = $iterator->next();

                if ($menuItem->isVegetarian()) {
                    print($menuItem->getName() . ', ');
                    print($menuItem->getPrice() . ' -- ');
                    print($menuItem->getDescription() . PHP_EOL);
                }
            }
        }
    }
 
    public function isItemVegetarian($name)
    {
        $breakfastIterator = $this->pancakeHouseMenu->createIterator();

        if ($this->isVegetarian($name, $breakfastIterator)) {
            return true;
        }

        $dinnerIterator = $this->dinerMenu->createIterator();

        if ($this->isVegetarian($name, $dinnerIterator)) {
            return true;
        }

        return false;
    }

    private function isVegetarian($name, \Iterator $iterator)
    {
        while ($iterator->hasNext())
        {
            $menuItem = $iterator->next();

            if ($menuItem->getName() == $name) {
                if ($menuItem->isVegetarian()) {
                    return true;
                }
            }
        }
        
        return false;
    }
}