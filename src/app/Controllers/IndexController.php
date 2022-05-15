<?php

namespace App\Controllers;

use Controllers\Controller;

if(!defined('APP_ACCESS'))
	exit('Access denied!');

class IndexController extends Controller
{
	public function __construct() {
		parent::__construct();
	}

}