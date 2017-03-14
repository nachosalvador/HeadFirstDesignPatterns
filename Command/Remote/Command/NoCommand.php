<?php

namespace HeadFirstDesignPatterns\Command\Remote\Command;

use HeadFirstDesignPatterns\Command\Remote\Command\Command;

class NoCommand implements Command
{
    public function execute()
    {
    }
}