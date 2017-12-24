<?php

namespace HeadFirstDesignPatterns\Command\Party\Command;

interface Command
{
    public function execute();

    public function undo();
}