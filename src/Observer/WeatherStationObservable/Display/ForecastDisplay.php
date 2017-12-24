<?php

namespace HeadFirstDesignPatterns\Observer\WeatherStationObservable\Display;

use HeadFirstDesignPatterns\Observer\WeatherStationObservable\Observable;
use HeadFirstDesignPatterns\Observer\WeatherStationObservable\WeatherData;

class ForecastDisplay implements DisplayElement, \SplObserver
{
    private $observable;
    private $currentPressure;
    private $lastPressure;

    public function __construct(Observable $observable)
    {
        $this->observable = $observable;
        $observable->attach($this);
    }

    public function display()
    {
        $output = 'Forecast: ';

        if ($this->currentPressure > $this->lastPressure) {
            $output .= 'Improving weather on the way!';
        } elseif ($this->currentPressure == $this->lastPressure) {
            $output .= 'More of the same';
        } elseif ($this->currentPressure < $this->lastPressure) {
            $output .= 'Watch out for cooler, rainy weather';
        }

        $output .= PHP_EOL;

        print($output);
    }

    public function update(\SplSubject $observable)
    {
        if ($observable instanceof WeatherData) {
            $pressure = $observable->getPressure();
            $this->lastPressure    = $this->currentPressure;
            $this->currentPressure = $pressure;

            $this->display();
        }
    }
}