<?php
abstract class Controller{
	protected $class = array();
	
	public function __get($name){
		if(array_key_exists($name, $this->class)){
			return $this->class[$name];
		}
		return null;
	}
	
	public function __construct(){
	}
	public function __destruct(){
		foreach ($this->class as $value) {
			unset($value);
		}
	}
	public function __call($name, $arguments){
		Security::show_404();
	}
	public function controller($name){
		require __BASEPATH__.'/controller/'.$name.'.php';
		$this->class[$name] = new $name();
	}
	
	public function model($name){
		require __BASEPATH__.'/model/'.$name.'.php';
		$this->class[$name] = new $name();
	}
	
	public function view($filename, $data=null){
		if(!empty($data)){
			foreach ($data as $key=>$val){
				${$key}=$val;
			}
		}
		require __BASEPATH__.'/view/'.$filename.'.php';
	}
}