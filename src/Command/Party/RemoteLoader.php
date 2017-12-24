<?php

require('../../../vendor/autoload.php');

use HeadFirstDesignPatterns\Command\Party\Hottub;
use HeadFirstDesignPatterns\Command\Party\Light;
use HeadFirstDesignPatterns\Command\Party\RemoteControl;
use HeadFirstDesignPatterns\Command\Party\Stereo;
use HeadFirstDesignPatterns\Command\Party\TV;

use HeadFirstDesignPatterns\Command\Party\Command\HottubOffCommand;
use HeadFirstDesignPatterns\Command\Party\Command\HottubOnCommand;
use HeadFirstDesignPatterns\Command\Party\Command\LightOffCommand;
use HeadFirstDesignPatterns\Command\Party\Command\LightOnCommand;
use HeadFirstDesignPatterns\Command\Party\Command\MacroCommand;
use HeadFirstDesignPatterns\Command\Party\Command\StereoOffCommand;
use HeadFirstDesignPatterns\Command\Party\Command\StereoOnCommand;
use HeadFirstDesignPatterns\Command\Party\Command\TVOffCommand;
use HeadFirstDesignPatterns\Command\Party\Command\TVOnCommand;

$remoteControl = new RemoteControl();

$light = new Light('Living room');
$tv = new TV('Living room');
$stereo = new Stereo('Living room');
$hottub = new Hottub();

$lightOn  = new LightOnCommand($light);
$stereoOn = new StereoOnCommand($stereo);
$tvOn = new TVOnCommand($tv);
$hottubOn = new HottubOnCommand($hottub);
$lightOff = new LightOffCommand($light);
$stereoOff = new StereoOffCommand($stereo);
$tvOff = new TVOffCommand($tv);
$hottubOff = new HottubOffCommand($hottub);

$partyOn = [$lightOn, $stereoOn, $tvOn, $hottubOn];
$partyOff = [$lightOff, $stereoOff, $tvOff, $hottubOff];

$partyOnMacro = new MacroCommand($partyOn);
$partyOffMacro = new MacroCommand($partyOff);


$remoteControl->setCommand(0, $partyOnMacro, $partyOffMacro);
$remoteControl->toString();
print("--- Pushing Macro On---" . PHP_EOL);
$remoteControl->onButtonWasPushed(0);
print("--- Pushing Macro Off---" . PHP_EOL);
$remoteControl->offButtonWasPushed(0);