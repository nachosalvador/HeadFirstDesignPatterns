<?php

require('../../vendor/autoload.php');

use HeadFirstDesignPatterns\Command\Remote\CeilingFan;
use HeadFirstDesignPatterns\Command\Remote\GarageDoor;
use HeadFirstDesignPatterns\Command\Remote\Light;
use HeadFirstDesignPatterns\Command\Remote\Stereo;
use HeadFirstDesignPatterns\Command\Remote\RemoteControl;

use HeadFirstDesignPatterns\Command\Remote\Command\CeilingFanOnCommand;
use HeadFirstDesignPatterns\Command\Remote\Command\CeilingFanOffCommand;
use HeadFirstDesignPatterns\Command\Remote\Command\GarageDoorUpCommand;
use HeadFirstDesignPatterns\Command\Remote\Command\GarageDoorDownCommand;
use HeadFirstDesignPatterns\Command\Remote\Command\LightOffCommand;
use HeadFirstDesignPatterns\Command\Remote\Command\LightOnCommand;
use HeadFirstDesignPatterns\Command\Remote\Command\StereoOnWithCDCommand;
use HeadFirstDesignPatterns\Command\Remote\Command\StereoOffCommand;

$remoteControl = new RemoteControl();

$livingRoomLight = new Light('Living room');
$kitchenLight    = new Light('Kitchen');
$ceilingFan      = new CeilingFan('Living room');
$garageDoor      = new GarageDoor('');
$stereo          = new Stereo('Living room');

$livingRoomLightOn  = new LightOnCommand($livingRoomLight);
$livingRoomLightOff = new LightOffCommand($livingRoomLight);
$kitchenLightOn     = new LightOnCommand($kitchenLight);
$kitchenLightOff    = new LightOffCommand($kitchenLight);

$ceilingFanOn  = new CeilingFanOnCommand($ceilingFan);
$ceilingFanOff = new CeilingFanOffCommand($ceilingFan);

$garageDoorUp   = new GarageDoorUpCommand($garageDoor);
$garageDoorDown = new GarageDoorDownCommand($garageDoor);

$stereoWithCDOn = new StereoOnWithCDCommand($stereo);
$stereOff       = new StereoOffCommand($stereo);

$remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
$remoteControl->setCommand(1, $kitchenLightOn, $kitchenLightOff);
$remoteControl->setCommand(2, $ceilingFanOn, $ceilingFanOff);
$remoteControl->setCommand(3, $stereoWithCDOn, $stereOff);

$remoteControl->toString();

$remoteControl->onButtonWasPushed(0);
$remoteControl->offButtonWasPushed(0);
$remoteControl->onButtonWasPushed(1);
$remoteControl->offButtonWasPushed(1);
$remoteControl->onButtonWasPushed(2);
$remoteControl->offButtonWasPushed(2);
$remoteControl->onButtonWasPushed(3);
$remoteControl->offButtonWasPushed(3);