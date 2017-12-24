<?php

require('../../../vendor/autoload.php');

use HeadFirstDesignPatterns\Observer\WeatherStation\WeatherData;
use HeadFirstDesignPatterns\Observer\WeatherStation\Display\CurrentConditionsDisplay;
use HeadFirstDesignPatterns\Observer\WeatherStation\Display\StatisticsDisplay;
use HeadFirstDesignPatterns\Observer\WeatherStation\Display\ForecastDisplay;
use HeadFirstDesignPatterns\Observer\WeatherStation\Display\HeatIndexDisplay;

$weatherData = new WeatherData();

$currentConditionsDisplay = new CurrentConditionsDisplay($weatherData);
$statisticsDisplay        = new StatisticsDisplay($weatherData);
$forecastDisplay          = new ForecastDisplay($weatherData);

$weatherData->attach($currentConditionsDisplay);
$weatherData->attach($statisticsDisplay);
$weatherData->attach($forecastDisplay);

$weatherData->setMesurements(80, 65, 30.4);
$weatherData->setMesurements(82, 70, 29.2);
$weatherData->setMesurements(78, 90, 29.2);