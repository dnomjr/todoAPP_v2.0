<?php
ini_set('display_startup_errors', 'on');
ini_set('display_errors', 'on');
error_reporting(-1);



// Require Composer's autoloader.
require_once 'vendor/autoload.php';
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// Using Medoo namespace.
use Medoo\Medoo;

$database = new Medoo([
	// [required]
	'type' => 'mysql',
	'host' => 'localhost',
	'database' => 'todo2',   //name
	'username' => 'root',
	'password' => 'root',
    'charset' => 'utf8mb4'
    ]);

?>