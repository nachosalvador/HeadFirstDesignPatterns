<?php

namespace HeadFirstDesignPatterns\Iterator\DinerMerger;

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

    public function size() { 
        return count($this->array);
    }
}