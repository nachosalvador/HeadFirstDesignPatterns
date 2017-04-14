<?php

namespace HeadFirstDesignPatterns\TemplateMethod\Barista;

use HeadFirstDesignPatterns\TemplateMethod\Barista\CaffeineBeverage;

class Coffee extends CaffeineBeverage
{
    public function brew()
    {
       print('Dripping Coffee through filter' . PHP_EOL);
    }

    public function addCondiments()
    {
       print('Adding Sugar and Milk' . PHP_EOL);
    }
}