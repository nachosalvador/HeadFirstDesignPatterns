<?php

namespace HeadFirstDesignPatterns\Adapter\Iterenum;

use HeadFirstDesignPatterns\Adapter\Iterenum\Enumeration;
use HeadFirstDesignPatterns\Adapter\Iterenum\Iterator;

class IteratorEnumeration implements Enumeration
{
    private $iterator;

    public function __construct(Iterator $iterator)
    {
        $this->iterator = $iterator;
    }

    public function hasMoreElements()
    {
        return $this->iterator->hasNext();
    }

    public function nextElement()
    {
        return $this->iterator->next();
    }
}