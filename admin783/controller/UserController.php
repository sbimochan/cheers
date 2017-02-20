<?php

class UserController extends Controller{

	public function login()
	{
		if (isset($_POST['btnLogin'])) {
			$am = $this->loadModel('admin');

//			require_once "model/AdminModel.php";


//			$am= new AdminModel();
			//print_r($_POST);
			$err = array();
			if (isset($_POST['email']) && !empty($_POST['email'])) {
				$am->email = $_POST['email'];
			} else {
				$err['email'] = "Enter email";
			}
			if (isset($_POST['password']) && !empty($_POST['password'])) {
				$am->password = $_POST['password'];
			} else {
				$err['password'] = "Enter password";
			}
			//print_r($err);
			if (count($err) == 0) {
				$userdata = $am->checkEmail();
				//print_r($userdata);
				if ($userdata) {
					# code...

				$newpassword=sha1($userdata->salt.$am->password);
				if($newpassword==$userdata->password){
					SessionHelper::init();
//					session_start();
					SessionHelper::set('admin_name',$userdata->name);

					SessionHelper::set('admin_username',$userdata->username);
					SessionHelper::set('admin_email',$userdata->email);
					SessionHelper::set('login_message',"Hello $userdata->username, Welcome to dashboard");
//					$_SESSION['admin_name']=$userdata->name;
//					$_SESSION['admin_pass']=$userdata->password;
//					$_SESSION['admin_username']=$userdata->username;
//					$_SESSION['admin_email']=$userdata->email;
//					$_SESSION['login_message']="Hello $userdata->username, Welcome to dashboard";

					$am->last_login=date('Y-m-d H:i:s');
					$am->updateLastLogin();
				$this->redirect('dashboard/index');
//					header('location:../dashboard/index');
				}else{
					SessionHelper::set('error_message',"Login Failed");
//					echo "Login Failed";
				}
			}else{
					SessionHelper::set('error_message',"Login Failed");
				//echo "Login Failed";
					//header('location:../user/login');
				}
				//print_r($userdata);
				//print_r($am);
				//print_r($am);
				// echo $salt= uniqid();
				// echo '<br>';
				// echo $pass= sha1($salt.$password);
				// header('location:../dashboard/index');
				// echo "login process continue";
			}
		}
		$this->loadView('user/login',false,false);
//		require_once "view/user/login.php";
	}

	public function logout()
	{
		SessionHelper::end();
//		@session_start();
//		session_destroy();
		$this->redirect('user/login');
//header('location:../user/login');
	}

	public function profile()
	{
		require_once "view/profile.php";
	}
	public function fblogin(){
		$this->loadView('user/fblogin',false,false);
	}
}
