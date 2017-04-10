<?php

namespace HeadFirstDesignPatterns\Facade\HomeTheater;

use HeadFirstDesignPatterns\Facade\HomeTheater\DvdPlayer;

class Projector
{
    private $description;
    private $dvdPlayer;

    public function __construct($description, DvdPlayer $dvdPlayer)
    {
        $this->description = $description;
        $this->dvdPlayer = $dvdPlayer;
    }

    public function on()
    {
        print($this->description . ' on' . PHP_EOL);
    }

    public function off()
    {
        print($this->description . ' off' . PHP_EOL);
    }

    public function wideScreenMode()
    {
        print($this->description . ' in widescreen mode (16x9 aspect ratio)' . PHP_EOL);
    }

    public function tvMode()
    {
        print($this->description . ' in tv mode (4x3 aspect ratio)' . PHP_EOL);
    }

    public function toString()
    {
        return $this->description;
    }
}