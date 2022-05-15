<?php

namespace App\Controllers;

use Controllers\IndexController;

if(!defined('APP_ACCESS'))
	exit('Access denied!');

class MainController extends IndexController
{
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		echo 'Hello, World!';
	}

	public function about() {
		echo 'About page!';
	}
}