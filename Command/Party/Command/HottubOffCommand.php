<?php

namespace HeadFirstDesignPatterns\Command\Party\Command;

use HeadFirstDesignPatterns\Command\Party\Command\Command;
use HeadFirstDesignPatterns\Command\Party\Hottub;

class HottubOffCommand implements Command
{
    private $hottub;

    public function __construct(Hottub $hottub)
    {
        $this->hottub = $hottub;
    }

    public function execute()
    {
        $this->hottub->setTemperature(98);
        $this->hottub->off();
    }

    public function undo()
    {
        $this->stereo->on();
    }
}