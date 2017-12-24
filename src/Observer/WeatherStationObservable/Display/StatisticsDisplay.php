<?php

namespace HeadFirstDesignPatterns\Observer\WeatherStationObservable\Display;

use HeadFirstDesignPatterns\Observer\WeatherStationObservable\Observable;
use HeadFirstDesignPatterns\Observer\WeatherStationObservable\WeatherData;

class StatisticsDisplay implements DisplayElement, \SplObserver
{
    private $observable;
    private $maxTemperature = 0.0;
    private $minTemperature = 200;
    private $temperatureSumatory = 0.0;
    private $numberOfReadings;

    public function __construct(Observable $observable)
    {
        $this->observable = $observable;
        $observable->attach($this);
    }

    public function display()
    {
        $avg = ($this->temperatureSumatory / $this->numberOfReadings);
        $max = $this->maxTemperature;
        $min = $this->minTemperature;

        print('Avg/Max/Min temperature = ' . $avg . '/' . $max . '/'. $min . PHP_EOL);
    }

    public function update(\SplSubject $observable)
    {
        if ($observable instanceof WeatherData) {
            $temperature = $observable->getTemperature();
            $this->temperatureSumatory += $temperature;
            $this->numberOfReadings++;

            if ($temperature > $this->maxTemperature) {
                $this->maxTemperature = $temperature;
            }

            if ($temperature < $this->minTemperature) {
                $this->minTemperature = $temperature;
            }

            $this->display();
        }
    }
}