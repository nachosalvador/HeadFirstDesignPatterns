<?php

namespace HeadFirstDesignPatterns\Command\Remote;

class Light
{
    private $location;

    public function __construct($location)
    {
        $this->location = $location;
    }

    public function off()
    {
        print($this->location . ' light is off' . PHP_EOL);
    }

    public function on()
    {
        print($this->location . ' light is on' . PHP_EOL);
    }
}