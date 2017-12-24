<?php

namespace HeadFirstDesignPatterns\Command\Party\Command;

use HeadFirstDesignPatterns\Command\Party\Command\Command;
use HeadFirstDesignPatterns\Command\Party\Light;

class LightOffCommand implements Command
{
    private $light;
    private $level;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->level = $this->light->getLevel();
        $this->light->off();
    }

    public function undo()
    {
        $this->light->dim($this->level);
    }
}