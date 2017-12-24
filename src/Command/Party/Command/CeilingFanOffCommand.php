<?php

namespace HeadFirstDesignPatterns\Command\Party\Command;

use HeadFirstDesignPatterns\Command\Party\Command\Command;
use HeadFirstDesignPatterns\Command\Party\CeilingFan;

class CeilingFanOffCommand implements Command
{
    private $ceilingFan;
    private $previousSpeed;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute()
    {
        $this->previousSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->off();
    }

    public function undo()
    {
        if ($this->previousSpeed == CeilingFan::HIGH) {
            $this->ceilingFan->high();
        } elseif ($this->previousSpeed == CeilingFan::MEDIUM) {
            $this->ceilingFan->medium();
        } elseif ($this->previousSpeed == CeilingFan::LOW) {
            $this->ceilingFan->low();
        } elseif ($this->previousSpeed == CeilingFan::OFF) {
            $this->ceilingFan->off();
        }
    }
}