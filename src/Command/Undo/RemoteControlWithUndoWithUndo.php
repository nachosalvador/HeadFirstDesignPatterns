<?php

namespace HeadFirstDesignPatterns\Command\Undo;

use HeadFirstDesignPatterns\Command\Undo\Command\Command;
use HeadFirstDesignPatterns\Command\Undo\Command\NoCommand;

class RemoteControlWithUndoWithUndo
{
    const NUMBER_OF_SLOTS = 7;

    private $onCommands;
    private $offCommands;
    private $undoCommand;

    public function __construct()
    {
        $this->onCommands  = array(self::NUMBER_OF_SLOTS);
        $this->offCommands = array(self::NUMBER_OF_SLOTS);

        $noCommand = new NoCommand();

        for ($i = 0; $i < self::NUMBER_OF_SLOTS; $i++) {
            $this->onCommands[]  = $noCommand;
            $this->offCommands[] = $noCommand;
        }

        $this->undoCommand = new NoCommand();
    }

    public function setCommand($slot, Command $onCommand, Command $offCommand)
    {
        $this->onCommands[$slot]  = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed($slot)
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    public function offButtonWasPushed($slot)
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    public function undoButtonWasPushed()
    {
        $this->undoCommand->undo();
    }

    public function toString()
    {
        print('------------- Undo Control -------------' . PHP_EOL);

        for ($i = 0; $i < self::NUMBER_OF_SLOTS; $i++) {
            print('slot[' . $i . ']' . get_class($this->onCommands[$i]) . '   ' . get_class($this->offCommands[$i]) . PHP_EOL);
        }
    }
}