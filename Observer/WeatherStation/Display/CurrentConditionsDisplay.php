<?php

namespace HeadFirstDesignPatterns\Observer\WeatherStation\Display;

use HeadFirstDesignPatterns\Observer\WeatherStation\WeatherData;

class CurrentConditionsDisplay implements DisplayElement, \SplObserver
{
    private $temperature;
    private $humidity;
    private $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->attach($this);
    }

    public function display()
    {
        $output = 'Current Conditions: ';
        $output .= $this->temperature . ' F degrees and ';
        $output .= $this->humidity . '% humidity' . PHP_EOL; 

        print($output);
    }

    public function update(\SplSubject $weatherData)
    {
        $this->temperature = $weatherData->getTemperature();
        $this->humidity    = $weatherData->getHumidity();

        $this->display();
    }
}