<?php

namespace HeadFirstDesignPatterns\Decorator\StarbuzzWithSizes;

abstract class Enum
{
	protected $value;

	public function __construct($value)
	{
		$this->value = $value;
	}

	public function getValue()
	{
		return $this->value;
	}
}