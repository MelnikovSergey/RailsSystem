<?php

$config = [];

$config['ServiceContainer']['Controllers'] = [
	// 'Controller1',
	// 'Controller2',
	// 'Controller3';

	'IndexController'
];

$config['ServiceContainer']['Helpers'] = [
	// 'Helper1',
	// 'Helper2',
	// 'Helper3';

	'HttpHelper'
];

$config['Routes'][] = [
	'url' => '/',
	'method' => 'GET',
	'action' => 'MainController/index',
	'module' => false
];

$config['Routes'][] = [
	'url' => 'about',
	'method' => 'GET',
	'action' => 'MainController/about',
	'module' => false
];
