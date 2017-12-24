<?php

namespace HeadFirstDesignPatterns\Facade\HomeTheater;

use HeadFirstDesignPatterns\Facade\HomeTheater\Amplifier;

class Tuner
{
    private $description;
    private $amplifier;
    private $frequency;

    public function __construct($description, Amplifier $amplifier)
    {
        $this->description = $description;
        $this->amplifier = $amplifier;
    }

    public function on()
    {
        print($this->description . ' on' . PHP_EOL);
    }

    public function off()
    {
        print($this->description . ' off' . PHP_EOL);
    }

    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
        print($this->description . ' setting frequency to ' . $this->frequency . PHP_EOL);
    }

    public function setAm()
    {
        print($this->description . ' setting AM mode' . PHP_EOL);
    }

    public function setFm()
    {
        print($this->description . ' setting FM mode' . PHP_EOL);
    }

    public function toString()
    {
        return $this->description;
    }
}