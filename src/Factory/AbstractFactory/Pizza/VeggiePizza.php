<?php

namespace HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza;

use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Ingredient\PizzaIngredientFactory;
use HeadFirstDesignPatterns\Factory\AbstractFactory\Pizza\Pizza;

class VeggiePizza extends Pizza
{
    private $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare()
    {
        print('Preparing ' . $this->name . PHP_EOL);
        print('Ingredients:' . PHP_EOL);

        $this->dough   = $this->ingredientFactory->createDough();
        print("\t" . $this->dough->toString() . PHP_EOL);

        $this->sauce   = $this->ingredientFactory->createSauce();
        print("\t" .$this->sauce->toString() . PHP_EOL);

        $this->cheese  = $this->ingredientFactory->createCheese();
        print("\t" .$this->cheese->toString() . PHP_EOL);

        $this->veggies = $this->ingredientFactory->createVeggies();

        foreach ($this->veggies as $veggie) {
            print("\t" .$veggie->toString() . PHP_EOL);
        }
    }
}