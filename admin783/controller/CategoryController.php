<?php

class CategoryController extends Controller{

	public function create()
	{
		$category= $this->loadModel('category');
		SessionHelper::init();
		if(isset($_POST['btnSave'])){

			// $category->id = $_POST['id'];
			$category->name = $_POST['name'];
			$category->rank = $_POST['rank'];
			$category->status = $_POST['status'];
			if ($_FILES['image']['error']==0) {
				$fn = uniqid().'_'.$_FILES['image']['name'];
				if(move_uploaded_file($_FILES['image']['tmp_name'], 'public/images/category/'.$fn)){
					$category->image = $fn;
				}

			}
			// $category->image = $_POST['image'];
			$category->parent_id = $_POST['parent_id'];
			$category->role = $_POST['role'];
			$category->slug = $_POST['slug'];
			$category->description = $_POST['description'];
			$category->created_date = date('Y-m-d H:i:s');
			$category->created_by = $_SESSION['admin_username'];

			$status = $category->saveCategory();
			if($status){
				SessionHelper::set('success_message',"Category created with rank".$category->rank);
			}else{
				SessionHelper::set('error_message',"Category couldn't be saved");
			}
		}
		$this->catmain = $category->selectMainCategory();
		// print_r($_POST);
		//print_r($this->catmain);
		$this->loadView('category/create');
	}

	public function index()
	{

		$category= $this->loadModel('category');
		$this->clist= $category->SelectAllCategory();
		//print_r($clist);
			$this->loadView('category/index');
		// require_once "category/index";
		//echo "this is select function";
	}
	function delete($id){
		$category= $this->loadModel('category');
		$category->id = $id;
		$status = $category->deleteCategory();
		if($status){
			SessionHelper::set('success_message',"Category deleted");
		}else{
			SessionHelper::set('error_message',"Category couldn't be deleted");
		}
		$this->redirect('category/index');
	}
	public function edit($id)
	{
		SessionHelper::init();
		if(isset($_POST['btnUpdate'])){
			$category= $this->loadModel('category');
			// $category->id = $_POST['id'];
			$category->id = $id;
			$category->name = $_POST['name'];
			$category->rank = $_POST['rank'];
			$category->status = $_POST['status'];
			$category->image = $_POST['image'];
			$category->parent_id = $_POST['parent_id'];
			$category->role = $_POST['role'];
			$category->slug = $_POST['slug'];
			$category->description = $_POST['description'];
			$category->modified_date = date('Y-m-d H:i:s');
			$category->modified_by = $_SESSION['admin_username'];
			$status = $category->updateCategory();
			if($status){
				SessionHelper::set('success_message',"Category Updated");
			}else{
				SessionHelper::set('error_message',"Category couldn't be updated");
			}
		}

		$category= $this->loadModel('category');
		$category->id=$id;
		$this->catdata = $category->selectCategoryById();
			//print_r($this->catdata);
		$this->loadView('category/edit');
	}
	

}
