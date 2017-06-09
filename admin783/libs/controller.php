<?php
class Controller{
	var $view;
	function __construct(){

//		$this->view=new View();
	}
	public function checkLoginStatus()
	{
		session_start();
		if (!isset($_SESSION['username'])){
			$this->redirect('user/login');
			//header("location:../user/login");
		}
	}
	public function redirect($path){
		$p = base_url() . $path;
		header("location:$p");
	}
	function loadModel($name,$admin=false){
	$mn=ucfirst($name).'Model';
	if($admin){
		$mf='admin783/model/'.$mn.'.php';
	}else{
		$mf='model/'.$mn.'.php';
	}

//		print_r($mf);
	if(file_exists($mf)){
		require_once ("$mf");
		$a = new $mn();
		return $a;
//		print_r($a);
	}else{
		die("$mn does not exist");
	}

	}
function checkUserLogin(){
	SessionHelper::init();
	if(!isset($_SESSION['admin_username'])){
		SessionHelper::set('error_message',"You have to login first");
		$this->redirect('user/login');
	}
}
function loadView($name,$header=true,$footer=true){
	if($header){
		require_once "view/layout/header.php";
	}

	require_once "view/$name.php";
	if($footer){
		require_once "view/layout/footer.php";
	}

}
}
/**
 * Created by PhpStorm.
 * User: SBimochan
 * Date: 8/27/2016
 * Time: 4:18 PM
 */
