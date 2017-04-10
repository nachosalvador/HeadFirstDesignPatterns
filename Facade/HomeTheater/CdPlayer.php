<?php

namespace HeadFirstDesignPatterns\Facade\HomeTheater;

use HeadFirstDesignPatterns\Facade\HomeTheater\Amplifier;

class CdPlayer
{
    private $description;
    private $currentTrack;
    private $amplifier;
    private $title;

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

    public function eject()
    {
        $this->title = null;
        print($this->description . ' eject' . PHP_EOL);
    }

    public function play($title)
    {
        if (is_numeric($title)) {
            if ($this->title == null) {
                print($this->description . ' can\'t play track' .
                    $this->currentTrack . ', no cd inserted' . PHP_EOL);
            } else {
                $this->currentTrack = $title;
                print($this->description . ' playing track' . $this->currentTrack . PHP_EOL);
            }
        } else {
            $this->title = $title;
            $this->currentTrack = 0;
            print($this->description . ' playing "'. $this->title . '"' . PHP_EOL);
        }
    }

    public function stop()
    {
        $this->currentTrack = 0;
        print($this->description . ' stopped "' . $this->title . '"' . PHP_EOL);
    }

    public function pause()
    {
        print($this->description . ' paused "' . $this->title . '"' . PHP_EOL);
    }

    public function toString()
    {
        return $this->description;
    }
}