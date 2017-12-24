<?php

namespace HeadFirstDesignPatterns\Command\SimpleRemote;

use HeadFirstDesignPatterns\Command\SimpleRemote\Command\Command;

class SimpleRemoteControl
{
    private $slot;

    public function setCommand(Command $command)
    {
        $this->slot = $command;
    }

    public function buttonWasPressed()
    {
        $this->slot->execute();
    }
}