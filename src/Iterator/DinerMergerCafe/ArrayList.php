<?php

namespace HeadFirstDesignPatterns\Iterator\DinerMergerCafe;

use HeadFirstDesignPatterns\Iterator\DinerMergerCafe\ArrayListIterator;

class ArrayList
{
    private $array;

    public function __construct()
    {
        $this->array = array();
    }

    public function add($obj)
    {
        array_push($this->array, $obj);
    }

    public function get($index)
    { 
        return $this->array[$index];
    }

    public function size()
    {
        return count($this->array);
    }

    public function iterator()
    {
        return new ArrayListIterator($this);
    }
}