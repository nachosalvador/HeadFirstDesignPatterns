<?php

namespace HeadFirstDesignPatterns\Observer\WeatherStationObservable;

use HeadFirstDesignPatterns\Observer\WeatherStationObservable\Observable;

class WeatherData extends Observable
{
    private $temperature;
    private $humidity;
    private $pressure;

    public function getHumidity()
    {
        return $this->humidity;
    }

    public function getPressure()
    {
        return $this->pressure;
    }

    public function getTemperature()
    {
        return $this->temperature;
    }

    public function mesurementsChanged()
    {
        $this->setChanged();
        $this->notify();
    }

    public function setMesurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity    = $humidity;
        $this->pressure    = $pressure;

        $this->mesurementsChanged();
    }
}