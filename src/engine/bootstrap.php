<?php

use Engine\RailsSystem;
use Engine\DI\DI;

try {
	$di = new DI();
	$rails = RailsSystem($di);
	$rails->run('On the start! Attention! March!');
} 
catch(\ErrorException $e) {
	echo $e->getMessage();
};