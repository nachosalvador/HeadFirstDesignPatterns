<?php

namespace HeadFirstDesignPatterns\Command\Remote\Command;

use HeadFirstDesignPatterns\Command\Remote\Command\Command;
use HeadFirstDesignPatterns\Command\Remote\Light;

class LightOffCommand implements Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->off();
    }

    public function undo()
    {
        $this->light->on();
    }
}