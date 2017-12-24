<?php

namespace HeadFirstDesignPatterns\Command\Party;

class Stereo
{
    private $location;

    public function __construct($location)
    {
        $this->location = $location;
    }

    public function off()
    {
        print($this->location . ' stereo is off' . PHP_EOL);
    }

    public function on()
    {
        print($this->location . ' stereo is on' . PHP_EOL);
    }

    public function setCD()
    {
        print($this->location . ' stereo is set for CD input' . PHP_EOL);
    }

    public function setDVD()
    {
        print($this->location . ' stereo is set for DVD input' . PHP_EOL);
    }

    public function setRadio()
    {
        print($this->location . ' stereo is set for Radio' . PHP_EOL);
    }

    public function setVolume($volume)
    {
        print($this->location . ' stereo volume set to ' . $volume . PHP_EOL);
    }
}