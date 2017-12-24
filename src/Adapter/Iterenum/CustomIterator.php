<?php

namespace HeadFirstDesignPatterns\Adapter\Iterenum;

use HeadFirstDesignPatterns\Adapter\Iterenum\Iterator;

class CustomIterator implements Iterator
{
    private $elements;
    private $index = -1;

    public function __construct(array $elements)
    {
        $this->elements = $elements;
    }

    public function hasNext()
    {
        if ($this->index <= count($this->elements)) {
            return true;
        } else {
            return false;
        }
    }

    public function next()
    {
        $this->index++;

        if ($this->index >= count($this->elements)) {
            exit;
        }

        return $this->elements[$this->index];
    }

    public function remove()
    {
        unset($this->elements[$this->index]);
    }
}