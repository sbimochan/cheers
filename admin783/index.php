<?php
require_once "config/config.php";
require_once "libs/controller.php";
require_once "libs/SessionHelper.php";
require_once "libs/model.php";
$url =  $_GET['url'];
$urla = explode('/', $url);
//print_r($urla);
$cn =  ucfirst($urla[0]);
 $cl = $cn . 'Controller';
$cf = 'controller/' . $cl . '.php';
if (file_exists($cf)) {
	require_once "$cf";
	$ob = new $cl();
	if (method_exists($ob, $urla[1])) {
		if(isset($urla[2]) && !empty($urla[2])){
			$ob->{$urla[1]}($urla[2]);
		}else{
			$ob->{$urla[1]}();
		}

	} else {
		die("$urla[1] not found in $cl");
	}

} else {
	die("$cl not found");
}
