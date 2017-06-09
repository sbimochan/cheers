<?php
class SessionHelper{
	static function init(){
		@session_start();
	}
	static function end(){
		self::init();
		session_destroy();
	}

	/**
	 * @param $key
	 * @param $value
	 */
	static function set($key, $value){
		self::init();
		$_SESSION[$key]=$value;
	}
static function flashMessage(){

	self::init();
	$ht='';
	if(isset($_SESSION['error_message'])){
		$ht =$ht. "<div class='alert alert-danger'>$_SESSION[error_message]</div>";
		unset ($_SESSION['error_message']);
	}
	else if(isset($_SESSION['success_message'])){
		$ht =$ht. "<div class='alert alert-success'>$_SESSION[success_message]</div>";
		unset ($_SESSION['success_message']);

	}
	echo $ht;
}
}



/**
 * Created by PhpStorm.
 * User: SBimochan
 * Date: 8/27/2016
 * Time: 6:36 PM
 */