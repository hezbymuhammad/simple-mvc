<?php
abstract class Model{
	protected $property = array();
	
	public function connectDB(){
		$this->property['db']=Database::get_instance();
		if($this->property['db']->connect_errno){
			exit('Connect to database failed');
		}
	}
	public function __contruct(){
	}
	
	public function __get($name){
		if(array_key_exists($name, $this->property)){
			return $this->property[$name];
		}
		return null;
	}
}