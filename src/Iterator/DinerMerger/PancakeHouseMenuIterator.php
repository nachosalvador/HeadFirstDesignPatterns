<?php

namespace HeadFirstDesignPatterns\Iterator\DinerMerger;

use HeadFirstDesignPatterns\Iterator\DinerMerger\ArrayList;
use HeadFirstDesignPatterns\Iterator\DinerMerger\Iterator;

class PancakeHouseMenuIterator implements Iterator
{
    private $items = [];
    private $position = 0;
 
    public function __construct(ArrayList $items)
    {
        $this->items = $items;
    }

    public function next()
    {
        $item = $this->items->get($this->position);
        $this->position = $this->position + 1;
        
        return $item;
    }

    public function hasNext()
    {
        if ($this->position >= $this->items->size()) {
            return false;
        } else {
            return true;
        }
    }
}