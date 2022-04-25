<?php

namespace Engine\DI; 

class DI 
{
	private $container = [];

	public  function get($key)
	{
		return $this->hasKey($key);
	}

	public  function hasKey($key)
	{
		return isset($this->container[$key]);
	}

	public  function set($key, $value)
	{
		$this->container[$key] = $value;

		return $this;
	}
}