<?php
class DashboardController extends Controller{

	public function index()
{
	$this->checkUserLogin();
//		@session_start();
//		if(!isset($_SESSION['admin_username'])){
//			header('location:../user/login');
//		}
//		require_once "view/layout/header.php";
//		require_once "view/dashboard/index.php";
//		require_once "view/layout/footer.php";
		$this->loadView('dashboard/index');
}}
