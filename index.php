<?php

namespace Simple\Demo;

require_once(__DIR__ . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php");

define("INDEX", basename(__FILE__));
define("APP_NAMESPACE", "Simple\\Demo");
define("ENVIRONMENT", "local");
define("APP_PATH", __DIR__ . DIRECTORY_SEPARATOR . "app" . DIRECTORY_SEPARATOR);

// spin up our config mgmt
$config = new \Fuel\Config\Container(ENVIRONMENT);
$config->setConfigFolder('');
class_alias('Fuel\Common\Arr', 'Arr');
$config->addPath('app/config');
 
// load illuminate
//$capsule = new \Illuminate\Database\Capsule\Manager; 
//$capsule->addConnection($config->load("database"));
//$capsule->setAsGlobal();
//$capsule->bootEloquent();

// go
$app = new \Simple\Core\Router;
$app->start();