<?php
final class Database{
	private static $instance;
	
	public static function get_instance(){
		if(empty(self::$instance)){
			self::$instance=new mysqli(__DBHOST__, __DBUSER__, __DBPASS__, __DBNAME__);
		}
		return self::$instance;
	}
}