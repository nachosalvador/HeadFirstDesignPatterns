<?php

namespace HeadFirstDesignPatterns\Command\Remote;

use HeadFirstDesignPatterns\Command\Remote\Command\Command;
use HeadFirstDesignPatterns\Command\Remote\Command\NoCommand;

class RemoteControl
{
    const NUMBER_OF_SLOTS = 7;

    private $onCommands;
    private $offCommands;

    public function __construct()
    {
        $this->onCommands  = array(self::NUMBER_OF_SLOTS);
        $this->offCommands = array(self::NUMBER_OF_SLOTS);

        $noCommand = new NoCommand();

        for ($i = 0; $i < self::NUMBER_OF_SLOTS; $i++) {
            $this->onCommands[]  = $noCommand;
            $this->offCommands[] = $noCommand;
        }
    }

    public function setCommand($slot, Command $onCommand, Command $offCommand)
    {
        $this->onCommands[$slot]  = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed($slot)
    {
        $this->onCommands[$slot]->execute();
    }

    public function offButtonWasPushed($slot)
    {
        $this->offCommands[$slot]->execute();
    }

    public function toString()
    {
        print('------------- Remote Control -------------' . PHP_EOL);

        for ($i = 0; $i < self::NUMBER_OF_SLOTS; $i++) {
            print('slot[' . $i . ']' . get_class($this->onCommands[$i]) . '   ' . get_class($this->offCommands[$i]) . PHP_EOL);
        }
    }
}