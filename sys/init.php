<?php
session_start();
require_once 'sys/config.php';
require_once 'sys/security.php';
require_once 'sys/controller.php';
require_once 'sys/model.php';
require_once 'sys/database.php';
require_once 'sys/global.php';
if(__DEVELOPMENT__){
	ini_set("display_errors", 1);
}