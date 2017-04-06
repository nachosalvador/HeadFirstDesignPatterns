<?php

namespace HeadFirstDesignPatterns\Adapter\Iterenum;

use HeadFirstDesignPatterns\Adapter\Iterenum\Enumeration;

class CustomEnumeration implements Enumeration
{
    private $elements;
    private $index = -1;

    public function __construct(array $elements)
    {
        $this->elements = $elements;
    }

    public function hasMoreElements()
    {
        if ($this->index <= count($this->elements)) {
            return true;
        } else {
            return false;
        }
    }

    public function nextElement()
    {
        $this->index++;

        if ($this->index >= count($this->elements)) {
            exit;
        }

        return $this->elements[$this->index];
    }
}