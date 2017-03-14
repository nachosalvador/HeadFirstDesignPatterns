<?php

namespace HeadFirstDesignPatterns\Command\Remote\Command;

use HeadFirstDesignPatterns\Command\Remote\Command\Command;
use HeadFirstDesignPatterns\Command\Remote\CeilingFan;

class CeilingFanOnCommand implements Command
{
    private $ceilingFan;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute()
    {
        $this->ceilingFan->high();
    }

    public function undo()
    {
        $this->ceilingFan->off();
    }
}