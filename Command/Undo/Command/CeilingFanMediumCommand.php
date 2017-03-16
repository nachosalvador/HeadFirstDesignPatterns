<?php

namespace HeadFirstDesignPatterns\Command\Undo\Command;

use HeadFirstDesignPatterns\Command\Undo\Command\Command;
use HeadFirstDesignPatterns\Command\Undo\CeilingFan;

class CeilingFanMediumCommand implements Command
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
        $this->ceilingFan->medium();
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