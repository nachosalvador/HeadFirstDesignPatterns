<?php

require('../../vendor/autoload.php');

use HeadFirstDesignPatterns\Command\Undo\CeilingFan;
use HeadFirstDesignPatterns\Command\Undo\Light;
use HeadFirstDesignPatterns\Command\Undo\RemoteControlWithUndoWithUndo;

use HeadFirstDesignPatterns\Command\Undo\Command\CeilingFanHighCommand;
use HeadFirstDesignPatterns\Command\Undo\Command\CeilingFanMediumCommand;
use HeadFirstDesignPatterns\Command\Undo\Command\CeilingFanOffCommand;
use HeadFirstDesignPatterns\Command\Undo\Command\LightOffCommand;
use HeadFirstDesignPatterns\Command\Undo\Command\LightOnCommand;

$remoteControlWithUndo = new RemoteControlWithUndoWithUndo();

$livingRoomLight = new Light('Living room');

$livingRoomLightOn  = new LightOnCommand($livingRoomLight);
$livingRoomLightOff = new LightOffCommand($livingRoomLight);

$remoteControlWithUndo->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);

$remoteControlWithUndo->onButtonWasPushed(0);
$remoteControlWithUndo->offButtonWasPushed(0);
$remoteControlWithUndo->toString();
$remoteControlWithUndo->undoButtonWasPushed();
$remoteControlWithUndo->offButtonWasPushed(0);
$remoteControlWithUndo->onButtonWasPushed(0);
$remoteControlWithUndo->toString();
$remoteControlWithUndo->undoButtonWasPushed();


$ceilingFan = new CeilingFan("Living room");

$ceilingFanHigh   = new CeilingFanHighCommand($ceilingFan);
$ceilingFanMedium = new CeilingFanMediumCommand($ceilingFan);
$ceilingFanOff    = new CeilingFanOffCommand($ceilingFan);

$remoteControlWithUndo->setCommand(0, $ceilingFanMedium, $ceilingFanOff);
$remoteControlWithUndo->setCommand(1, $ceilingFanHigh, $ceilingFanOff);

$remoteControlWithUndo->onButtonWasPushed(0);
$remoteControlWithUndo->offButtonWasPushed(0);
$remoteControlWithUndo->toString();
$remoteControlWithUndo->undoButtonWasPushed();
$remoteControlWithUndo->onButtonWasPushed(1);
$remoteControlWithUndo->toString();
$remoteControlWithUndo->undoButtonWasPushed();