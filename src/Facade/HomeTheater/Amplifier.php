<?php

namespace HeadFirstDesignPatterns\Facade\HomeTheater;

use HeadFirstDesignPatterns\Facade\HomeTheater\Tuner;
use HeadFirstDesignPatterns\Facade\HomeTheater\DvdPlayer;
use HeadFirstDesignPatterns\Facade\HomeTheater\CdPlayer;

class Amplifier
{
    private $description;
    private $tuner;
    private $dvdPlayer;
    private $cdPlayer;

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

    public function serStereoSound()
    {
        print($this->description . ' stereo mode on' . PHP_EOL);
    }

    public function setSurroundSound()
    {
        print($this->description . ' surround sound on (5 speakers, 1 subwoofer)' . PHP_EOL);
    }

    public function setVolume($level)
    {
        print($this->description . ' setting volume to ' . $level . PHP_EOL);
    }

    public function setTuner(Tuner $tuner)
    {
        $this->tuner = $tuner;
        print($this->description . ' setting tuner to ' . $this->tuner->toString() . PHP_EOL);
    }

    public function setDvd(DvdPlayer $dvdPlayer)
    {
        $this->dvdPlayer = $dvdPlayer;
        print($this->description . ' setting DVD player to' . $this->dvdPlayer->toString() . PHP_EOL);
    }

    public function setCd(CdPlayer $cdPlayer)
    {
        $this->cdPlayer = $cdPlayer;
        print($this->description . ' setting CD player to '. $this->cdPlayer->toString() . PHP_EOL);
    }

    public function toString()
    {
        return $this->description;
    }
}