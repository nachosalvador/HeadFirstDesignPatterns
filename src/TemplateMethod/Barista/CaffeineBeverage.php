<?php

namespace HeadFirstDesignPatterns\TemplateMethod\Barista;

abstract class CaffeineBeverage
{
    final public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    abstract protected function brew();

    abstract protected function addCondiments();

    private function boilWater()
    {
        print('Boiling water' . PHP_EOL);
    }

    private function pourInCup()
    {
        print('Pouring into cup' . PHP_EOL);
    }
}