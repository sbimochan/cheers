<?php
class CartController extends Controller{
	function addtocart(){
		// $this->category = $this->loadModel('category',true);
		// $this->product = $this->loadModel('product',true);
		// $this->cart = $this->loadModel('cart');
		// $this->order = $this->loadModel('order');
		// $this->orderdetails = $this->loadModel('orderdetails');
		// @session_start();
		// $this->cartitem = $this->cart->selectCurrentCartItem();
		// $this->view->cartitem = $this->cartitem;
		//
		// 	$this->cart->product_id = $_POST['product_id'];
		// 	$this->cart->session_id = session_id();
		// 	$this->cart->quantity = $_POST['quantity'];
		// 	$this->cart->price = $_POST['price'];
		// 	$this->cart->discount = $_POST['discount'];
		// 	$this->cart->color = $_POST['color'];
		// 	if (isset($_SESSION['customer_id']))
		// 	{
		// 				$this->cart->customer_id = $_SESSION['customer_id'];
		// 	}
//print_r($_POST['quantity']);
print_r($_POST['price']);
print_r($_POST['totalprice']);
print_r($finalquantity);
	}
}
