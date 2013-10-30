<?php
foreach ($config as $key=>$val){
	define('__'.strtoupper($key).'__', $val);
}

require __BASEPATH__ . '/controller/' . __CONTROLLER__ . '.php';
$name=__CONTROLLER__;
${$name} = new $name();