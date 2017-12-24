<?php

namespace HeadFirstDesignPatterns\Observer\WeatherStation\Display;

use HeadFirstDesignPatterns\Observer\WeatherStation\WeatherData;

class StatisticsDisplay implements DisplayElement, \SplObserver
{
    private $maxTemperature = 0.0;
    private $minTemperature = 200;
    private $temperatureSumatory = 0.0;
    private $numberOfReadings;
    private $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->attach($this);
    }

    public function display()
    {
        $avg = ($this->temperatureSumatory / $this->numberOfReadings);
        $max = $this->maxTemperature;
        $min = $this->minTemperature;

        print('Avg/Max/Min temperature = ' . $avg . '/' . $max . '/'. $min . PHP_EOL);
    }

    public function update(\SplSubject $weatherData)
    {
        $temperature = $weatherData->getTemperature();
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