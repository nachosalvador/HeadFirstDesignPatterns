<?php

namespace HeadFirstDesignPatterns\Iterator\DinerMergeri;

interface Iterator
{
    public function hasNext();
    public function next();
    public function remove();
}