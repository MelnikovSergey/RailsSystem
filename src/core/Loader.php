<?php

namespace core\Loader;

if(!defined('APP_ACCESS'))
	exit('Access denied!');

class Loader
{
	private $_config;
	
	public function __construct() {
		$this->_config = [];
	}

	public function setConfig($config) {
		$this->_config = $config;
	}

	public function loadHelpers() {
		$helpers = $config['ServiceContainer']['Helpers'];

		foreach ($helpers as $key => $value) {

			$path_core_helper = 'core/Helpers/' . $value[$key] . '.php';
			$path_app_helper = 'app/Helpers/' . $value[$key] . '.php';

			if (file_exists($path_core_helper)) {
				require_once($path_core_helper);
			} elseif (file_exists($path_app_helper)) {
				require_once($path_app_helper);	 
			} 
		}
	}


}