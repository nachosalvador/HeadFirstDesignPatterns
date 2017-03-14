<?php

require('../../vendor/autoload.php');

use HeadFirstDesignPatterns\Command\SimpleRemote\GarageDoor;
use HeadFirstDesignPatterns\Command\SimpleRemote\Light;
use HeadFirstDesignPatterns\Command\SimpleRemote\SimpleRemoteControl;

use HeadFirstDesignPatterns\Command\SimpleRemote\Command\GarageDoorOpenCommand;
use HeadFirstDesignPatterns\Command\SimpleRemote\Command\LightOnCommand;

$remote = new SimpleRemoteControl();

$light = new Light();
$garageDoor = new GarageDoor();

$lightOn = new LightOnCommand($light);
$garageOpen = new GarageDoorOpenCommand($garageDoor);

$remote->setCommand($lightOn);
$remote->buttonWasPressed();
$remote->setCommand($garageOpen);
$remote->buttonWasPressed();