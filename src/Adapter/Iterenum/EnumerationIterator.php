<?php

namespace HeadFirstDesignPatterns\Adapter\Iterenum;

use HeadFirstDesignPatterns\Adapter\Iterenum\Enumeration;
use HeadFirstDesignPatterns\Adapter\Iterenum\Iterator;

class EnumerationIterator implements Iterator
{
    private $enumeration;

    public function __construct(Enumeration $enumeration)
    {
        $this->enumeration = $enumeration;
    }

    public function hasNext()
    {
        return $this->enumeration->hasMoreElements();
    }

    public function next()
    {
        return $this->enumeration->nextElement();
    }

    public function remove() {
        throw new Exception('Unsupported Operation Exception');
    }
}