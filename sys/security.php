<?php
final class Security{
	public function __construct(){
		
	}
	public static function encode_id($id){
		return base64_encode($id);
	}
	public static function decode_id($string){
		return base64_decode($string);
	}
	public static function show_404(){
		header('Location: /framework/404.php');
	}
}