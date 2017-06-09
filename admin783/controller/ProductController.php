<?php

class ProductController extends Controller{

	public function create()
	{
		$product= $this->loadModel('product');
		SessionHelper::init();
		if(isset($_POST['btnSave'])){

			// $product->id = $_POST['id'];
			$product->name = $_POST['name'];
			$product->color = $_POST['color'];
			$product->country= $_POST['country'];
			// $product->product_size = $_POST['product_size'];
			$product->product_price = $_POST['product_price'];
			$product->discount = $_POST['discount'];
			$product->stock = $_POST['stock'];
			$product->quantity = $_POST['quantity'];
			$product->status = $_POST['status'];
				$product->feature_key = $_POST['feature_key'];
					$product->slider_key = $_POST['slider_key'];

			if ($_FILES['image1']['error']==0) {
				$fn = uniqid().'_'.$_FILES['image1']['name'];
				if(move_uploaded_file($_FILES['image1']['tmp_name'], 'public/images/product/'.$fn)){
					$product->image1 = $fn;
				}

			}
			if ($_FILES['image2']['error']==0) {
				$fn = uniqid().'_'.$_FILES['image2']['name'];
				if(move_uploaded_file($_FILES['image2']['tmp_name'], 'public/images/product/'.$fn)){
					$product->image2 = $fn;
				}

			}
			if ($_FILES['image3']['error']==0) {
				$fn = uniqid().'_'.$_FILES['image3']['name'];
				if(move_uploaded_file($_FILES['image3']['tmp_name'], 'public/images/product/'.$fn)){
					$product->image3 = $fn;
				}

			}
			if ($_FILES['image4']['error']==0) {
				$fn = uniqid().'_'.$_FILES['image4']['name'];
				if(move_uploaded_file($_FILES['image4']['tmp_name'], 'public/images/product/'.$fn)){
					$product->image4 = $fn;
				}

			}
			// $product->image = $_POST['image'];
			$product->category_id = $_POST['category_id'];
				$product->subcategory_id = $_POST['subcategory_id'];

			$product->slug = $_POST['slug'];
				$product->short_description = $_POST['short_description'];
			$product->description = $_POST['description'];
			$product->created_date = date('Y/m/d');
			$product->created_by = $_SESSION['admin_username'];
			echo $status = $product->saveProduct();
			if($status){
					SessionHelper::set('success_message',"product created");
			}else{
				SessionHelper::set('error_message',"product couldn't be saved ");
			}
		}
		$this->catid = $product->selectMainMenu();
		$this->subcatid = $product->selectSubProductMenu();
		// $this->price = $product->selectMainProduct();
		
		//print_r($this->promain);
		// print_r($_POST);
		//print_r($this->catmain);
		//print_r($this->catmain);
		$this->loadView('product/create');
	}

	public function index()
	{

		$product= $this->loadModel('product');
		$this->plist= $product->SelectAllProduct();
		//print_r($clist);
			$this->loadView('product/index');
		// require_once "product/index";
		//echo "this is select function";
	}
	function delete($id){
		$product= $this->loadModel('product');
		$product->id = $id;
		$status = $product->deleteproduct();
		if($status){
			SessionHelper::set('success_message',"product deleted");
		}else{
			SessionHelper::set('error_message',"product couldn't be deleted");
		}
		$this->redirect('product/index');
	}
	public function edit($id)
	{
		SessionHelper::init();
		if(isset($_POST['btnUpdate'])){
			$product= $this->loadModel('product');
			// $product->id = $_POST['id'];
			$product->id = $id;
			$product->name = $_POST['name'];
			$product->rank = $_POST['rank'];
			$product->status = $_POST['status'];
			$product->image = $_POST['image'];
			$product->parent_id = $_POST['parent_id'];
			$product->role = $_POST['role'];
			$product->slug = $_POST['slug'];
			$product->description = $_POST['description'];
			$product->modified_date = date('Y-m-d H:i:s');
			$product->modified_by = $_SESSION['admin_username'];
			$status = $product->updateproduct();
			if($status){
				SessionHelper::set('success_message',"product Updated");
			}else{
				SessionHelper::set('error_message',"product couldn't be updated");
			}
		}

		$product= $this->loadModel('product');
		$product->id=$id;
		$this->catdata = $product->selectproductById();
			//print_r($this->catdata);
		$this->loadView('product/edit');
	}

}
