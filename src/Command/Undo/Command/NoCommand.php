<?php

namespace HeadFirstDesignPatterns\Command\Undo\Command;

use HeadFirstDesignPatterns\Command\Undo\Command\Command;

class NoCommand implements Command
{
    public function execute()
    {
    }

    public function undo()
    {
    }
}