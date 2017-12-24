<?php

namespace HeadFirstDesignPatterns\Command\SimpleRemote\Command;

use HeadFirstDesignPatterns\Command\SimpleRemote\Command\Command;
use HeadFirstDesignPatterns\Command\SimpleRemote\GarageDoor;

class GarageDoorOpenCommand implements Command
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
}