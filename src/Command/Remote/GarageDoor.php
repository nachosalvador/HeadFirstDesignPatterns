<?php

namespace HeadFirstDesignPatterns\Command\Remote;

class GarageDoor
{
    private $location;

    public function __construct($location)
    {
        $this->location = $location;
    }

    public function up()
    {
        print($this->location . ' garage door is up');
    }

    public function down()
    {
        print($this->location . ' garage door is down');
    }

    public function stop()
    {
        print($this->location . ' garage door is stopped');
    }

    public function lightOn()
    {
        print($this->location . ' garage light is on');
    }

    public function lightOff()
    {
        print($this->location . ' garage light is off');
    }
}