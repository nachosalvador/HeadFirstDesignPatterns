<?php

namespace HeadFirstDesignPatterns\Adapter\Ducks;

use HeadFirstDesignPatterns\Adapter\Ducks\Duck;
use HeadFirstDesignPatterns\Adapter\Ducks\Turkey;

class TurkeyAdapter implements Duck
{
    private $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack()
    {
        $this->turkey->gobble();
    }

    public function fly()
    {
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}