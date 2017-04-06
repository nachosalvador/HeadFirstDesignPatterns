<?php

namespace HeadFirstDesignPatterns\Command\Party\Command;

use HeadFirstDesignPatterns\Command\Party\Command\Command;
use HeadFirstDesignPatterns\Command\Party\TV;

class TVOnCommand implements Command
{
    private $tv;

    public function __construct(TV $tv)
    {
        $this->tv = $tv;
    }

    public function execute()
    {
        $this->tv->on();
        $this->tv->setInputChannel();
    }

    public function undo()
    {
        $this->tv->off();
    }
}