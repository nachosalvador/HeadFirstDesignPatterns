<?php

namespace HeadFirstDesignPatterns\Observer\WeatherStationObservable\Display;

use HeadFirstDesignPatterns\Observer\WeatherStationObservable\Observable;
use HeadFirstDesignPatterns\Observer\WeatherStationObservable\WeatherData;

class CurrentConditionsDisplay implements DisplayElement, \SplObserver
{
    private $observable;
    private $temperature;
    private $humidity;

    public function __construct(Observable $observable)
    {
        $this->observable = $observable;
        $observable->attach($this);
    }

    public function display()
    {
        $output = 'Current Conditions: ';
        $output .= $this->temperature . ' F degrees and ';
        $output .= $this->humidity . '% humidity' . PHP_EOL; 

        print($output);
    }

    public function update(\SplSubject $observable)
    {
        if ($observable instanceof WeatherData) {
            $this->temperature = $observable->getTemperature();
            $this->humidity    = $observable->getHumidity();

            $this->display();
        }
    }
}