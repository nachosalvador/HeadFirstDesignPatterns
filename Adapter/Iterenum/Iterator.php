<?php

namespace HeadFirstDesignPatterns\Adapter\Iterenum;

interface Iterator
{
    public function hasNext();

    public function next();

    public function remove();
}