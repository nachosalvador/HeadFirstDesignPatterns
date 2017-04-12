<?php

namespace HeadFirstDesignPatterns\TemplateMethod\Barista;

use HeadFirstDesignPatterns\TemplateMethod\Barista\CaffeineBeverageWithHook;

class CoffeeWithHook extends CaffeineBeverageWithHook
{
    public function brew()
    {
       print('Dripping Coffee through filter' . PHP_EOL); 
    }

    public function addCondiments()
    {
       print('Adding Sugar and Milk' . PHP_EOL); 
    }

    public function customerWantsCondiments()
    {
        $answer = $this->getUserInput();

        if (strtolower($answer[0]) == 'y') {
            return true;
        } else {
            return false;
        }
    }

    private function getUserInput()
    {
        print('Would you like milk and sugar with your coffee (y/n)? ');

        $stdin = fopen('php://stdin', 'r');

        $answer = fgetc($stdin);

        fclose($stdin);

        return $answer;
    }
}