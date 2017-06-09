<?php
class AdminModel{
	public $id,$name,$username,$email,$password,$salt,$status,$last_login;
	function checkEmail(){
	     $sql= "select * from tbl_admin where email='$this->email' and status='1'";
	     $conn = new mysqli('localhost','root','toor','cheersdb');
	     if($conn->connect_errno !=0){
	     	die('Database connection error');
	     }
	     $res=$conn->query($sql);
	    if($res->num_rows ==1){
	    	return $res->fetch_object();
	    }else{
	    	return false;
	    }
	}
	public function updateLastLogin(){
		$sql = "update tbl_admin set last_login='$this->last_login' where email='$this->email'";
		$conn = new mysqli('localhost','root','toor','cheersdb');
		if($conn->connect_errno !=0){
			die('Database connection error');
		}
		$conn->query($sql);
		if($conn->affected_rows ==1){
			return true;
		}else{
			return false;
		}
	}

}
