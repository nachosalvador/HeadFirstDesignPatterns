<?php

namespace HeadFirstDesignPatterns\Iterator\DinerMerger;

interface Iterator
{
    public function hasNext();
    public function next();
}