<?php
require_once 'sys/config.php';
require_once 'sys/security.php';
require_once 'sys/controller.php';
require_once 'sys/model.php';
require_once 'sys/database.php';
require_once 'sys/bootstrap.php';

session_start();

foreach ($config as $key=>$val){
	define('__'.strtoupper($key).'__', $val);
}

if(__DEVELOPMENT__){
	ini_set("display_errors", 1);
}

$main=new Main();