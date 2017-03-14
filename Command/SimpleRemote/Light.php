<?php

namespace HeadFirstDesignPatterns\Command\SimpleRemote;

class Light
{
    public function off()
    {
        print('Light is off' . PHP_EOL);
    }

    public function on()
    {
        print('Light is on' . PHP_EOL);
    }
}