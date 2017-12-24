<?php

namespace HeadFirstDesignPatterns\Facade\HomeTheater;

class Screen
{
    private $description;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function up()
    {
        print($this->description . ' going up' . PHP_EOL);
    }

    public function down()
    {
        print($this->description . ' going down' . PHP_EOL);
    }

    public function toString()
    {
        return $this->description;
    }
}