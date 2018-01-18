<?php

namespace HeadFirstDesignPatterns\Iterator\DinerMergerCafe;

use HeadFirstDesignPatterns\Iterator\DinerMergerCafe\Menu;
use HeadFirstDesignPatterns\Iterator\DinerMergerCafe\MenuItem;
use HeadFirstDesignPatterns\Iterator\DinerMergerCafe\HashMap;

class CafeMenu implements Menu
{
    private $menuItems;
  
    public function __construct()
    {
        $this->menuItems = new HashMap();
        $this->addItem(
            'Veggie Burger and Air Fries',
            'Veggie burger on a whole wheat bun, lettuce, tomato, and fries',
            true,
            3.99
        );
        $this->addItem(
            'Soup of the day',
            'A cup of the soup of the day, with a side salad',
            true,
            3.69
        );
        $this->addItem(
            'Burrito',
            'A large burrito, with whole pinto beans, salsa, guacamol',
            true,
            4.29
        );
    }

    public function addItem($name, $description, $vegetarian, $price) 
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);

        $this->menuItems->put($name, $menuItem);
    }

    public function getItems()
    {
        return $this->menuItems;
    }
  
    public function createIterator()
    {
        return $this->menuItems->iterator();
    }
}