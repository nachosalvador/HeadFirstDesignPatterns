<?php

namespace HeadFirstDesignPatterns\Command\SimpleRemote;

class GarageDoor
{
    public function up()
    {
        print('Garage door is open' . PHP_EOL);
    }

    public function down()
    {
        print('Garage door is closed' . PHP_EOL);
    }

    public function stop()
    {
        print('Garage door is stopped' . PHP_EOL);
    }

    public function lightOn()
    {
        print('Garage light is on' . PHP_EOL);
    }

    public function lightOff()
    {
        print('Ggarage light is off' . PHP_EOL);
    }
}