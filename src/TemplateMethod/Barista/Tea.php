<?php

namespace HeadFirstDesignPatterns\TemplateMethod\Barista;

use HeadFirstDesignPatterns\TemplateMethod\Barista\CaffeineBeverage;

class Tea extends CaffeineBeverage
{
    public function brew()
    {
       print('Steeping the tea' . PHP_EOL);
    }

    public function addCondiments()
    {
       print('Adding Lemon' . PHP_EOL);
    }
}