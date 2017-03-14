<?php

namespace HeadFirstDesignPatterns\Command\Remote\Command;

use HeadFirstDesignPatterns\Command\Remote\Command\Command;
use HeadFirstDesignPatterns\Command\Remote\GarageDoor;

class GarageDoorUpCommand implements Command
{
    private $garageDoor;

    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    public function execute()
    {
        $this->garageDoor->up();
    }

    public function undo()
    {
        $this->garageDoor->down();	
    }
}