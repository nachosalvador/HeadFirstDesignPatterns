<?php

namespace HeadFirstDesignPatterns\Iterator\DinerMerger;

use HeadFirstDesignPatterns\Iterator\DinerMerger\Iterator;

class DinerMenuIterator implements Iterator
{
    private $items;
    private $position = 0;
 
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function next()
    {
        $item = $this->items[$this->position];
        $this->position = $this->position + 1;
        
        return $item;
    }

    public function hasNext()
    {
        if ($this->position >= count($this->items) || $this->items[$this->position] == null) {
            return false;
        } else {
            return true;
        }
    }
}