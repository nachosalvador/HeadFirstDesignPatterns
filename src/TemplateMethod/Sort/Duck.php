<?php

namespace HeadFirstDesignPatterns\TemplateMethod\Sort;

use HeadFirstDesignPatterns\TemplateMethod\Sort\Comparable;

class Duck implements Comparable
{
    private $name;
    private $weight;

    public function __construct($name, $weight)
    {
        $this->name = $name;
        $this->weight = $weight;
    }

    public function toString()
    {
        print($this->name . ' weighs ' . $this->weight . PHP_EOL);
    }

    public function compareTo(Comparable $otherDuck)
    {
        if ($this->weight < $otherDuck->weight) {
            return -1;
        } elseif ($this->weight == $otherDuck->weight) {
            return 0;
        } else {
            return 1;
        }
    }
}