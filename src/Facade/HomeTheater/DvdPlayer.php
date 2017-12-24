<?php

namespace HeadFirstDesignPatterns\Facade\HomeTheater;

use HeadFirstDesignPatterns\Facade\HomeTheater\Amplifier;

class DvdPlayer
{
    private $currentTrack;
    private $amplifier;
    private $movie;

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
        $this->movie = null;
        print($this->description . ' eject' . PHP_EOL);
    }

    public function play($movie)
    {
        if (is_numeric($movie)) {
            if ($this->movie == null) {
                print($this->description . ' can\'t play track' .
                    $this->currentTrack . ', no cd inserted' . PHP_EOL);
            } else {
                $this->currentTrack = $movie;
                print($this->description . ' playing track' . $this->currentTrack . PHP_EOL);
            }
        } else {
            $this->movie = $movie;
            $this->currentTrack = 0;
            print($this->description . ' playing "'. $this->movie . '"' . PHP_EOL);
        }
    }

    public function stop()
    {
        $this->currentTrack = 0;
        print($this->description . ' stopped "' . $this->movie . '"' . PHP_EOL);
    }

    public function pause()
    {
        print($this->description . ' paused "' . $this->movie . '"' . PHP_EOL);
    }

    public function toString()
    {
        return $this->description;
    }
}