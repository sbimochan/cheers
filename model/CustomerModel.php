<?php
class CustomerModel extends Model{
	public $id,$name,$email,$phone,$address,$shipping_address,$username,$password,$salt,$status,$remember_key,$verify_key,$created_date,$last_login;


	function saveCustomer(){
		$sql = "insert into tbl_customer(name,email,phone,address,shipping_address,username,password,salt,verify_key,created_date) values ('$this->name','$this->email','$this->phone','$this->address','$this->shipping_address','$this->username','$this->password','$this->salt','$this->verify_key','$this->created_date')";

		return $this->insert($sql);
	}

	public function getCustomerByKey()
	{
		$sql = "select * from tbl_customer where verify_key='$this->verify_key' and status='0'";
		return $this->select($sql);
	}

	public function activateAccount()
	{
		$sql = "update tbl_customer set verify_key='',status='1' where verify_key='$this->verify_key'";
		return $this->update($sql);
	}

	public function loginCheck()
	{
		$sql = "select * from tbl_customer where email='$this->username' or username='$this->username' and status='1'";
		return $this->select($sql);
	}

	

	

	
	// public function updateCartQuantity()
	// {
	// 	$sql = "update tbl_cart set quantity='$this->quantity' where id='$this->id'";
	// 	return $this->update($sql);
	// }

	// public function deleteCartItem()
	// {
	// 	$sql = "delete from tbl_cart where id='$this->id'";
	// 	return $this->delete($sql);
	// }

	

	
}

?>