<?php

namespace HeadFirstDesignPatterns\Command\Party\Command;

use HeadFirstDesignPatterns\Command\Party\Command\Command;

class NoCommand implements Command
{
    public function execute()
    {
    }

    public function undo()
    {
    }
}