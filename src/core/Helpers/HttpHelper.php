<?php

namespace core\Helpers;

if(!defined('APP_ACCESS'))
	exit('Access denied!');

class HttpHelper
{
	private function __construct() {
		$this->_config = [];
	}

	public static function test() {
		return 'Test HTTP helper';
	}
}