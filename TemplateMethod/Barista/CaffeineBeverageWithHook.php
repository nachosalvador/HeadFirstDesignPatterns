<?php

namespace HeadFirstDesignPatterns\TemplateMethod\Barista;

abstract class CaffeineBeverageWithHook
{
    final public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();

        if ($this->customerWantsCondiments()) {
            $this->addCondiments();
        }
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

    protected function customerWantsCondiments()
    {
        return true;
    }
}