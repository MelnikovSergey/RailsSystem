<?php

namespace Engine; 

class RailsSystem 
{
	private $di;

	public  function __construct($di)
	{
		$this->di = $di;
	}

	public  function run($key)
	{
		echo $key;
	}
}