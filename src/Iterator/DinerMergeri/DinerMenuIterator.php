<?php

namespace HeadFirstDesignPatterns\Iterator\DinerMergeri;


class DinerMenuIterator implements \Iterator
{
    private $list = [];
    private $position = 0;
 
    public function __construct(array $list)
    {
        $this->list = $list;
    }

    public function current()
    {
        return $this->list[$this->position];
    }

    public function hasNext()
    {
        if ($this->position >= count($this->list) || $this->list[$this->position] == null) {
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
        $item = $this->list[$this->position];
        $this->position = $this->position + 1;
        
        return $item;
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