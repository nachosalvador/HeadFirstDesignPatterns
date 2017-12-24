<?php

namespace HeadFirstDesignPatterns\Observer\WeatherStation\Display;

use HeadFirstDesignPatterns\Observer\WeatherStation\WeatherData;

class ForecastDisplay implements DisplayElement, \SplObserver
{
    private $currentPressure;
    private $lastPressure;
    private $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->attach($this);
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

    public function update(\SplSubject $weatherData)
    {
        $pressure = $weatherData->getPressure();
        $this->lastPressure    = $this->currentPressure;
        $this->currentPressure = $pressure;

        $this->display();
    }
}