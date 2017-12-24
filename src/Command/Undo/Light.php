<?php

namespace HeadFirstDesignPatterns\Command\Undo;

class Light
{
    private $location;
    private $level;

    public function __construct($location)
    {
        $this->location = $location;
    }

    public function off()
    {
        $this->level = 0;
        print($this->location . ' light is off' . PHP_EOL);
    }

    public function on()
    {
        $this->level = 100;
        print($this->location . ' light is on' . PHP_EOL);
    }

    public function dim($level)
    {
        $this->level = $level;

        if ($level == 0) {
            $this->off();
        } else {
            print('Light is dimmed to ' . $level . PHP_EOL);
        }
    }

    public function getLevel()
    {
        return $this->level;
    }
}