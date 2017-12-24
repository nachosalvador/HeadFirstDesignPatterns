<?php

namespace HeadFirstDesignPatterns\Adapter\Ducks;

use HeadFirstDesignPatterns\Adapter\Ducks\Duck;
use HeadFirstDesignPatterns\Adapter\Ducks\Turkey;

class DuckAdapter implements Turkey
{
    private $duck;
    private $rand;

    public function __construct(Duck $duck)
    {
        $this->duck = $duck;
        $this->rand = rand(0,5);
    }

    public function gobble()
    {
        $this->duck->quack();
    }

    public function fly()
    {
        if ($this->rand == 0) {
            $this->duck->fly();
        }
    }
}