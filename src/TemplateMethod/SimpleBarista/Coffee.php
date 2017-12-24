<?php

namespace HeadFirstDesignPatterns\TemplateMethod\SimpleBarista;

class Coffee
{
	public function prepareRecipe()
	{
		$this->boilWater();
		$this->brewCoffeeGrinds();
		$this->pourInCup();
		$this->addSugarAndMilk();
	}

	public function boilWater()
	{
		print('Boiling water' . PHP_EOL);
	}

    public function brewCoffeeGrinds()
    {
       print('Dripping Coffee through filter' . PHP_EOL);
    }

    public function pourInCup()
    {
    	print('Pouring into cup' . PHP_EOL);
    }

    public function addSugarAndMilk()
    {
       print('Adding Sugar and Milk' . PHP_EOL);
    }
}