<?php

namespace HeadFirstDesignPatterns\Command\Party;

class TV
{
    private $location;
    private $channel;

    public function __construct($location)
    {
        $this->location = $location;
    }

    public function off()
    {
        print($this->location . ' TV is off' . PHP_EOL);
    }

    public function on()
    {
        print($this->location . ' TV is on' . PHP_EOL);
    }

    public function setInputChannel()
    {
        $this->channel = 3;
        print($this->location . ' TV channel is set for DVD' . PHP_EOL);
    }
}