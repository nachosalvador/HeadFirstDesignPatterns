<?php

namespace HeadFirstDesignPatterns\Iterator\DinerMerger;

use HeadFirstDesignPatterns\Iterator\DinerMerger\ArrayList;
use HeadFirstDesignPatterns\Iterator\DinerMerger\Menu;
use HeadFirstDesignPatterns\Iterator\DinerMerger\MenuItem;
use HeadFirstDesignPatterns\Iterator\DinerMerger\PancakeHouseMenuIterator;

class PancakeHouseMenu implements Menu
{
    private $menuItems;
 
    public function __construct()
    {
        $this->menuItems = new ArrayList();
    
        $this->addItem(
            'K&B\'s Pancake Breakfast',
            'Pancakes with scrambled eggs, and toast',
            true,
            2.99
        );
 
        $this->addItem(
            'Regular Pancake Breakfast',
            'Pancakes with fried eggs, sausage',
            false,
            2.99
        );
 
        $this->addItem(
            'Blueberry Pancakes',
            'Pancakes made with fresh blueberries',
            true,
            3.49
        );
 
        $this->addItem(
            'Waffles',
            'Waffles, with your choice of blueberries or strawberries',
            true,
            3.59
        );
    }

    public function addItem($name, $description, $vegetarian, $price)
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        $this->menuItems->add($menuItem);
    }
 
    public function getMenuItems()
    {
        return $this->menuItems;
    }
  
    public function createIterator()
    {
        return new PancakeHouseMenuIterator($this->menuItems);
    }
  
    public function toString()
    {
        return 'Objectville Pancake House Menu';
    }
}