<?php

namespace HeadFirstDesignPatterns\Command\Undo\Command;

interface Command
{
    public function execute();

    public function undo();
}