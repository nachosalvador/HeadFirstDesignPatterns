<?php

namespace HeadFirstDesignPatterns\Iterator\DinerMergerCafe;

class HashMapIterator implements \Iterator
{
    private $items;
    private $position;
    private $keys;

    public function __construct(array $items, array $keys) {
        $this->items = $items;
        $this->keys = $keys;
        $this->position = 0;
    }

    public function current()
    {
        return $this->items[$this->key()];
    }

    public function hasNext()
    {
        return (isset($this->keys[$this->position]) !== false);
    }

    public function key()
    {
        return $this->keys[$this->position];
    }

    public function next()
    {
        $current = $this->current();
        $this->position++;

        return $current;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function valid()
    {
        return isset($this->keys[$this->position]);
    }
}