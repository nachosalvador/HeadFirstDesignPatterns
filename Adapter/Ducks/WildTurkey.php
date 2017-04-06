<?php

namespace HeadFirstDesignPatterns\Adapter\Ducks;

use HeadFirstDesignPatterns\Adapter\Ducks\Turkey;

class WildTurkey implements Turkey
{
	public function gobble()
    {
        print('Gobble gobble' . PHP_EOL);
    }

    public function fly()
    {
        print('I\'m  flying a short distance' . PHP_EOL);
    }
}