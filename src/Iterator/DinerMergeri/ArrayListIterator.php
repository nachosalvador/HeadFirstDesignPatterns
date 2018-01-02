<?php

namespace HeadFirstDesignPatterns\Iterator\DinerMergeri;

class ArrayListIterator implements \Iterator
{
    private $items;
    private $position = 0;
 
    public function __construct(ArrayList $items)
    {
        $this->items = $items;
    }

    public function current()
    {
        return $this->items[$this->position];
    }

    public function hasNext()
    {
        if ($this->position >= $this->items->size()) {
            return false;
        } else {
            return true;
        }
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        $item = $this->items->get($this->position);
        $this->position = $this->position + 1;
        
        return $item;
    }

    public function remove()
    {
        $this->items->remove($this->position);
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function valid()
    {
        return isset($this->list[$this->position]);
    }
}