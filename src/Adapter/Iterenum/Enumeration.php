<?php

namespace HeadFirstDesignPatterns\Adapter\Iterenum;

interface Enumeration
{
    public function hasMoreElements();

    public function nextElement();
}