<?php

namespace HeadFirstDesignPatterns\Iterator\DinerMergeri;

use HeadFirstDesignPatterns\Iterator\DinerMergeri\Iterator;

class DinerMenuIterator implements Iterator
{
    private $list;
    private $position = 0;
 
    public function __construct(array $list)
    {
        $this->list = $list;
    }

    public function next()
    {
        $item = $this->list[$this->position];
        $this->position = $this->position + 1;
        
        return $item;
    }

    public function hasNext()
    {
        if ($this->position >= count($this->list) || $this->list[$this->position] == null) {
            return false;
        } else {
            return true;
        }
    }

    public function remove()
    {
        if ($this->position <= 0) {
            throw new Exception('You can\'t remove an item until you\'ve done at least one next()');
        }
        if ($this->list[$this->position - 1] != null) {
            for ($i = $this->position - 1; $i < (count($this->list) - 1); $i++) {
                $this->list[$i] = $this->list[$i + 1];
            }
            $this->list[count($this->list) - 1] = null;
        }
    }
}