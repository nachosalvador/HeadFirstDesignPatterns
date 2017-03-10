<?php

namespace HeadFirstDesignPatterns\Singleton;

class ChocolateBoiler
{
    private $empty;
    private $boiled;
    private static $uniqueInstance;

    public static function getInstance()
    {
        if (null === static::$uniqueInstance) {
            print('Creating unique instance of CholateBoiler'. PHP_EOL);
             static::$uniqueInstance = new static();
        }

        print('Returning instance of ChocolateBoiler' . PHP_EOL);

        return static::$uniqueInstance;
    }

    public function fill()
    {
        if ($this->isEmpty()) {
            $this->empty  = false;
            $this->boiled = false;
        }
    }

    public function drain()
    {
        if (!$this->isEmpty() && $this->isBoiled()) {
            $this->empty = true;
        }
    }

    public function boil()
    {
        if (!$this->isEmpty() && !$this->isBoiled()) {
            $this->boiled = true;
        }
    }

    public function isEmpty()
    {
        return $this->empty;
    }

    public function isBoiled()
    {
        return $this->boiled;
    }

    private function __construct()
    {
        $this->empty  = true;
        $this->boiled = false;
    }

    private function __clone()
    {
        
    }
}