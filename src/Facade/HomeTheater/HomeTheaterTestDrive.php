<?php

require('../../../vendor/autoload.php');

use HeadFirstDesignPatterns\Facade\HomeTheater\Amplifier;
use HeadFirstDesignPatterns\Facade\HomeTheater\Tuner;
use HeadFirstDesignPatterns\Facade\HomeTheater\DvdPlayer;
use HeadFirstDesignPatterns\Facade\HomeTheater\CdPlayer;
use HeadFirstDesignPatterns\Facade\HomeTheater\Projector;
use HeadFirstDesignPatterns\Facade\HomeTheater\TheaterLights;
use HeadFirstDesignPatterns\Facade\HomeTheater\Screen;
use HeadFirstDesignPatterns\Facade\HomeTheater\PopcornPopper;
use HeadFirstDesignPatterns\Facade\HomeTheater\HomeTheaterFacade;

$amplier = new Amplifier('Top-O-Line Amplifier');
$tuner = new Tuner('Top-O-Line AM/FM Tuner', $amplier);
$dvdPlayer = new DvdPlayer('Top-O-Line DVD Player', $amplier);
$cdPlayer = new CdPlayer('Top-O-Line CD Player', $amplier);
$projector = new Projector('Top-O-Line Projector', $dvdPlayer);
$lights = new TheaterLights('Theater Ceiling Lights');
$screen = new Screen('Theater Screen');
$popper = new PopcornPopper('Popcorn Popper');

$homeTheater = new HomeTheaterFacade($amplier, $tuner, $dvdPlayer,
    $cdPlayer, $projector, $screen, $lights, $popper);
$homeTheater->watchMovie('Raiders of the Lost Ark');
$homeTheater->endMovie();