<?php
class CustomerController extends Controller{

	function __construct(){
		parent::__construct();
		$this->category = $this->loadModel('category',true);
		$this->product = $this->loadModel('product',true);
		$this->customer = $this->loadModel('customer');
		$this->cart = $this->loadModel('cart');
		@session_start();
		$this->cart->session_id = session_id();
		$this->view->cartitem = $this->cart->selectCurrentCartItem();
		$this->view->cartlist = $this->category->selectAllActiveMainCategory();
		$this->view->subcatlist = $this->category->selectAllActiveSubcategory();
	}

	public function register()
	{
		print_r($_POST);
		if (isset($_POST['btnRegister'])) {
			$this->customer->name = $_POST['name'];
			$this->customer->email = $_POST['email'];
			$this->customer->address = $_POST['address'];
			$this->customer->shipping_address = $_POST['shipping_address'];
			$this->customer->phone = $_POST['phone'];
			$this->customer->username = $_POST['username'];
			$this->customer->salt = uniqid();
			$this->customer->password = sha1($this->customer->salt.$_POST['password']);
			$this->customer->verify_key = md5($this->customer->salt);
			$this->customer->created_date = date('Y-m-d H:i:s');
			$status = $this->customer->saveCustomer();
			if ($status) {

				$p = base_url(). '/customer/verify/' . $this->customer->verify_key;
				$link = "Your Registration Success, Verify From Email<a href='$p' target='blank' >Click Here</>";
				 $_SESSION['success_message'] =$link;
				 //mail(to, subject, message)
			} else {
				 $_SESSION['error_message'] ="Error";
			}

			$this->redirect("customer/login");


		}
	}

	public function login()
	{
		if (isset($_POST['btnLogin'])) {
			$this->customer->username = $_POST['username'];
			$this->customer->password = $_POST['password'];

			$cdata = $this->customer->loginCheck();
			if (count($cdata)== 1) {
				$salt = $cdata[0]->salt;
				$np = sha1($salt.$this->customer->password);
				if ($np == $cdata[0]->password) {
					$_SESSION['success_message'] ="Login Success";
					@session_start();
					$_SESSION['customer_username'] = $cdata[0]->username;
					$_SESSION['customer_name'] = $cdata[0]->name;
					$_SESSION['customer_email'] = $cdata[0]->email;
					$_SESSION['customer_id'] = $cdata[0]->id;
					$this->redirect('cart/checkout');
				} else {
					$_SESSION['error_message'] ="Invalid Password";
				}
			} else {
				$_SESSION['error_message'] ="Invalid Username/Email";
			}
		}
		// $this->cart->product_id = $_POST['product_id'];
		// $this->cart->session_id = session_id();
		// $this->cart->color = $_POST['color'];
		// $this->cart->size = $_POST['size'];
		// $this->cart->price = $_POST['price'];
		// $this->cart->discount = $_POST['discount'];
		// $this->cart->quantity = $_POST['quantity'];
		// $this->cart->created_timestamp = time();
		// if (isset($_SESSION['customer_id'])) {
		// 	$this->cart->customer_id = $_SESSION['customer_id'];
		// }

		// $ci = $this->cart->selectCartItemByAttribute();
		// if (count($ci) == 1) {
		// 	//process to update quantity
		// 	$this->cart->quantity = $this->cart->quantity + $ci[0]->quantity;
		// 	$this->cart->id = $ci[0]->id;
		// 	$status = $this->cart->updateCartQuantity();
		// 	if ($status) {
		// 		$_SESSION['success_message'] ="Quantity Updated to cart";
		// 	} else {
		// 		$_SESSION['error_message'] ="quantity can not update to cart";
		// 	}
		// } else {
		// 	$status = $this->cart->saveCart();
		// 	if ($status) {
		// 		$_SESSION['success_message'] ="$_POST[url] added to cart";
		// 	} else {
		// 		$_SESSION['error_message'] ="Item can not added to cart";
		// 	}
		// }

		// $this->redirect("dashboard/product/$_POST[url]");
		$this->view->loadView('customer/register');
	}

	public function detailsx()
	{
		$this->view->loadView('cart/detailsx');
	}

	public function delete($id)
	{
		$this->cart->id = $id;
		$st = $this->cart->deleteCartItem();
		if ($st) {
			$_SESSION['success_message'] ="Item Deleted From Cart";
		} else {
			$_SESSION['error_message'] ="Item can not Delete from cart";
		}
		$this->redirect("cart/details");
	}

	public function updatecart()
	{
		$this->cart->id = $_POST['cart_id'];
		$this->cart->quantity = $_POST['quantity'];
		$status = $this->cart->updateCartQuantity();
		if ($status) {
				$_SESSION['success_message'] ="Quantity Updated to cart";
			} else {
				$_SESSION['error_message'] ="quantity can not update to cart";
			}
			$this->redirect("cart/details");
	}

	public function checkout()
	{
		if (!isset($_SESSION['customer_username'])) {
				$this->redirect('customer/login');
		}
		$this->view->loadView('cart/checkout');

	}

	function verify($key){
		$this->customer->verify_key = $key;
		$cust = $this->customer->getCustomerByKey();
		if (count($cust) == 1) {
			$st = $this->customer->activateAccount();
			if ($st) {
				$_SESSION['success_message'] ="Your Account is  Activated, You can login now";
			} else {
				$_SESSION['error_message'] ="Customer Can not Activated";
			}
			$this->redirect('customer/login');

		} else {
			$_SESSION['error_message'] ="Verify key Not Matched";
		}
	}

	public function logout()
	{
		SessionHelper::init();
		SessionHelper::end();
		$this->redirect('customer/login');
	}


}

?>
