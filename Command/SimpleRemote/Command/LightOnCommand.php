<?php

namespace HeadFirstDesignPatterns\Command\SimpleRemote\Command;

use HeadFirstDesignPatterns\Command\SimpleRemote\Command\Command;
use HeadFirstDesignPatterns\Command\SimpleRemote\Light;

class LightOnCommand implements Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->on();
    }

    public function undo()
    {
        $this->light->off();	
    }
}