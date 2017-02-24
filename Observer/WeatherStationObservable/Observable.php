<?php

namespace HeadFirstDesignPatterns\Observer\WeatherStationObservable;

abstract class Observable implements \SplSubject
{
    protected $observers;
    protected $changed;

    public function __construct(){
        $this->observers = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer) {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer) {
        $this->observers->detach($observer);
    }

    public function notify() {
        if ($this->changed) {
            foreach ($this->observers as $observer ) {
                $observer->update($this);
            }
        }

        $this->changed = false;
    }

    public function setChanged()
    {
        $this->changed = true;
    }
}