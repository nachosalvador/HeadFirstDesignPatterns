<?php

namespace HeadFirstDesignPatterns\Command\Party\Command;

use HeadFirstDesignPatterns\Command\Party\Command\Command;
use HeadFirstDesignPatterns\Command\Party\Hottub;

class HottubOnCommand implements Command
{
    private $hottub;

    public function __construct(Hottub $hottub)
    {
        $this->hottub = $hottub;
    }

    public function execute()
    {
        $this->hottub->on();
        $this->hottub->setTemperature(104);
        $this->hottub->circulate();
    }

    public function undo()
    {
        $this->stereo->off();
    }
}