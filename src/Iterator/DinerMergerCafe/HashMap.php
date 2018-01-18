<?php

namespace HeadFirstDesignPatterns\Iterator\DinerMergerCafe;

use HeadFirstDesignPatterns\Iterator\DinerMergerCafe\HashMapIterator;

class HashMap
{
    private $array;

    public function __construct()
    {
        $this->array = array();
    }

    public function get($index)
    { 
        return $this->array[$index];
    }

    public function put($key, $value)
    {
        $this->array[$key] = $value;
    }

    public function iterator()
    {
        return new HashMapIterator($this->array, array_keys($this->array));
    }

    public function size()
    {
        return count($this->array);
    }
}