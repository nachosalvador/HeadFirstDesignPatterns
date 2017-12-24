<?php

namespace HeadFirstDesignPatterns\Command\SimpleRemote\Command;

use HeadFirstDesignPatterns\Command\SimpleRemote\Command\Command;
use HeadFirstDesignPatterns\Command\SimpleRemote\Light;

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