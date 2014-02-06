<?php

namespace Simple\Demo;

require_once(__DIR__ . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php");

define("ENVIRONMENT", "local");

// spin up our config mgmt
$config = new \Fuel\Config\Container(ENVIRONMENT);
$config->setConfigFolder('');
class_alias('Fuel\Common\Arr', 'Arr');
$config->addPath('app/config');
 
// load illuminate
$capsule = new \Illuminate\Database\Capsule\Manager; 
$capsule->addConnection($config->load("database"));
$capsule->setAsGlobal();
$capsule->bootEloquent();

// go
\Simple\Router::start("Simple\\Demo");