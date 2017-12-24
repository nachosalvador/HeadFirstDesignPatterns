<?php

namespace HeadFirstDesignPatterns\Facade\HomeTheater;

class TheaterLights
{
    private $description;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function on()
    {
        print($this->description . ' on' . PHP_EOL);
    }

    public function off()
    {
        print($this->description . ' off' . PHP_EOL);
    }

    public function dim($level)
    {
        print($this->description . ' diming to ' . $level .'%' . PHP_EOL);
    }

    public function toString()
    {
        return $this->description;
    }
}