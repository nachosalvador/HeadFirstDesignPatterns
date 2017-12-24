<?php

namespace HeadFirstDesignPatterns\Command\Party\Command;

use HeadFirstDesignPatterns\Command\Party\Command\Command;
use HeadFirstDesignPatterns\Command\Party\Stereo;

class StereoOffCommand implements Command
{
    private $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        $this->stereo->off();
    }

    public function undo()
    {
        $this->stereo->on();
    }
}