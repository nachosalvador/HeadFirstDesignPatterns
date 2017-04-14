<?php

namespace HeadFirstDesignPatterns\TemplateMethod\Sort;

interface Comparable
{
    public function compareTo(Comparable $object);
}