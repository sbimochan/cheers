<?php
class DashboardController extends Controller{
  function index(){
    $category= $this->loadModel('category',true);
    $product= $this->loadModel('product',true);
    $this->menuitem = $category->selectMainMenu();
    // print_r($category);
    // $this->menuitem = $category->selectMainMenu();
		$this->submenuitem = $category->selectSubCategoryMenu();

    $this->selectedsubmenu=$category->selectSelectedsubmenu();

    $this->slider = $product->selectSliderImages();
    $this->latestproduct = $product->selectLatestProduct();
    $this->all= $product->SelectAllProduct();
      $this->loadView('dashboard/index');


  }
  function contact(){
     $category= $this->loadModel('category',true);
 
    $this->menuitem = $category->selectMainMenu();
    // print_r($category);
    // $this->menuitem = $category->selectMainMenu();
    $this->submenuitem = $category->selectSubCategoryMenu();

    $this->selectedsubmenu=$category->selectSelectedsubmenu();

        $this->loadView('dashboard/contact');
  }
   function login(){
     $category= $this->loadModel('category',true);
 
    $this->menuitem = $category->selectMainMenu();
    // print_r($category);
    // $this->menuitem = $category->selectMainMenu();
    $this->submenuitem = $category->selectSubCategoryMenu();

    $this->selectedsubmenu=$category->selectSelectedsubmenu();

        $this->loadView('dashboard/login');
  }
  function register(){
     $category= $this->loadModel('category',true);
 
    $this->menuitem = $category->selectMainMenu();
    // print_r($category);
    // $this->menuitem = $category->selectMainMenu();
    $this->submenuitem = $category->selectSubCategoryMenu();

    $this->selectedsubmenu=$category->selectSelectedsubmenu();

        $this->loadView('dashboard/register');
  }
}

 ?>
