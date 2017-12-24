<?php

namespace HeadFirstDesignPatterns\TemplateMethod\SimpleBarista;

class Tea
{
	public function prepareRecipe()
	{
		$this->boilWater();
		$this->steepTeaBag();
		$this->pourInCup();
		$this->addLemon();
	}

	public function boilWater()
	{
		print('Boiling water' . PHP_EOL);
	}

    public function steepTeaBag()
    {
       print('Steeping the tea' . PHP_EOL);
    }

    public function pourInCup()
    {
    	print('Pouring into cup' . PHP_EOL);
    }

    public function addLemon()
    {
       print('Adding Lemon' . PHP_EOL);
    }
}