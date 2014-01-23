<?php
class Main extends Controller{
	private $property = array();
	public function __construct(){
		$this->controller(__HOME__);
	}
	public function index(){
		if(!empty($_GET['key'])){
			$path=__BASEPATH__ . '/controller/' . $_GET['key'] . '.php';
			if(file_exists($path)){
				$methodName=(empty($_GET['module']))?'index':$_GET['module'];
				$paramName=(empty($_GET['param']))?null:$_GET['param'];
				$this->controller($className);
				$this->{$_GET['key']}->{$methodName}($paramName);
			} else{
				Security::show_404();
			}
		} else{
			$this->{__HOME__}->index();
		}
	}
}