<?php

namespace HeadFirstDesignPatterns\Command\Party;

class Hottub
{
    private $on;
    private $temperature;


    public function off()
    {
        $this->on = false;
    }

    public function on()
    {
        $this->on = true;
    }

    public function circulate()
    {
        if ($this->on) {
            print('Hottub is bubbling!' . PHP_EOL);
        }
    }

    public function jetsOn()
    {
        if ($this->on) {
            print('Hottub jets are on' . PHP_EOL);
        }
    }

    public function jetsOff()
    {
        if ($this->on) {
            print('Hottub jets are off' . PHP_EOL);
        }
    }

    public function setTemperature($temperature)
    {
        if ($temperature > $this->temperature) {
            print('Hottub is heating to a steaming ' . $temperature . ' degrees' . PHP_EOL);
        } else {
            print('Hottub is cooling to ' . $temperature . ' degrees' . PHP_EOL);
        }
    }
}