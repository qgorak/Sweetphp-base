<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__.DS.'app'.DS);
require_once __DIR__.DS.'vendor'.DS.'autoload.php';
$config=include ROOT.'config/config.php';
\Sweetphp\Foundation\Startup::run($config);