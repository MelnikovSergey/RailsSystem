<?php

use core\Loader;
use core\Helpers;

define('APP_ACCESS', true);

require_once('config/configs.php');
require_once('core/Loader.php');

$entry_point = new Loader();
$entry_point->setConfig($config);

$entry_point->loadHelpers();

echo HttpHelper::test();