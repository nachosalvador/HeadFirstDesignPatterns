<?php

namespace HeadFirstDesignPatterns\TemplateMethod\Barista;

use HeadFirstDesignPatterns\TemplateMethod\Barista\CaffeineBeverageWithHook;

class TeaWithHook extends CaffeineBeverageWithHook
{
    public function brew()
    {
       print('Steeping the tea' . PHP_EOL);
    }

    public function addCondiments()
    {
       print('Adding Lemon' . PHP_EOL);
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
        print('"Would you like lemon with your tea (y/n)? ');

        $stdin = fopen('php://stdin', 'r');

        $answer = fgetc($stdin);

        fclose($stdin);

        return $answer;
    }
}