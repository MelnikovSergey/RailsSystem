<?php

namespace App\Controllers;

use Controllers\IndexController;


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