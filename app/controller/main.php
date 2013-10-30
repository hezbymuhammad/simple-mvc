<?php
/*
 * main controller
 * controll other controller
 */
class Main extends Controller{
	private $property = array();
	public function __construct(){
		
	}
	
	public function index(){
		echo 'helloworld';
	}
}