<?php

require('../../vendor/autoload.php');

use HeadFirstDesignPatterns\Observer\WeatherStationObservable\WeatherData;
use HeadFirstDesignPatterns\Observer\WeatherStationObservable\Display\CurrentConditionsDisplay;
use HeadFirstDesignPatterns\Observer\WeatherStationObservable\Display\StatisticsDisplay;
use HeadFirstDesignPatterns\Observer\WeatherStationObservable\Display\ForecastDisplay;
use HeadFirstDesignPatterns\Observer\WeatherStationObservable\Display\HeatIndexDisplay;

$weatherData = new WeatherData();

$currentConditionsDisplay = new CurrentConditionsDisplay($weatherData);
$statisticsDisplay        = new StatisticsDisplay($weatherData);
$forecastDisplay          = new ForecastDisplay($weatherData);
$heatIndexDisplay         = new HeatIndexDisplay($weatherData);

$weatherData->attach($currentConditionsDisplay);
$weatherData->attach($statisticsDisplay);
$weatherData->attach($forecastDisplay);
$weatherData->attach($heatIndexDisplay);

$weatherData->setMesurements(80, 65, 30.4);
$weatherData->setMesurements(82, 70, 29.2);
$weatherData->setMesurements(78, 90, 29.2);