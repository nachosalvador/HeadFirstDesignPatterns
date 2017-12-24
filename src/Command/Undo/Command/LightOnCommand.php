<?php

namespace HeadFirstDesignPatterns\Command\Undo\Command;

use HeadFirstDesignPatterns\Command\Undo\Command\Command;
use HeadFirstDesignPatterns\Command\Undo\Light;

class LightOnCommand implements Command
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
        $this->light->on();
    }

    public function undo()
    {
        $this->light->dim($this->level);
    }
}