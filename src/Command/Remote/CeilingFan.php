<?php

namespace HeadFirstDesignPatterns\Command\Remote;

class CeilingFan
{
    const HIGH   = 2;
    const MEDIUM = 1;
    const LOW    = 0;

    private $location;
    private $level;

    public function __construct($location)
    {
        $this->location = $location;
    }

    public function high()
    {
        $this->level = self::HIGH;
        print($this->location . ' ceiling fan is on high' . PHP_EOL);
    }

    public function medium()
    {
        $this->level = self::MEDIUM;
        print($this->location . ' ceiling fan is on medium' . PHP_EOL);
    }

    public function low()
    {
        $this->level = self::LOW;
        print($this->location . ' ceiling fan is on low' . PHP_EOL);
    }

    public function off()
    {
        $this->level = 0;
        print($this->location . ' ceiling fan is off' . PHP_EOL);
    }

    public function getSpeed()
    {
        return $this->level;
    }
}