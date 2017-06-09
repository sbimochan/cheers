<?php
class DashboardController extends Controller{
  public function index(){
    $category= $this->loadModel('category',true);
    $product= $this->loadModel('product',true);
    $this->menuitem = $category->selectAllMainCategory();
    // print_r($category);
    // $this->menuitem = $category->selectMainMenu();

		$subcat=$this->submenuitem = $category->selectSubcategory();

    $arr = array();
    foreach ($subcat as $scl) {
      array_push($arr, $scl->parent_id);
      $arr = array_unique($arr);
    }
    $this->subcat = $arr;

    $this->selectedsubmenu=$category->selectAllActiveSubcategory();

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
  function details($slug){
//print_r($slug);
    //print_r($category_id);
    $category= $this->loadModel('category',true);
     $product= $this->loadModel('product',true);
    $this->menuitem = $category->selectMainMenu();

    $this->submenuitem = $category->selectSubCategoryMenu();
 $this->all= $product->SelectAllProduct();

  $this->selectedproduct=$product->selectDetails($slug);

  //$this->sorted=$category->categoryNamevia($slug);

  $this->sorted=$category->nameOfCategory($slug);
  $this->subsorted=$category->nameOfsubCategory($slug);
    $this->selectedsubmenu=$category->selectSelectedsubmenu();

        $this->loadView('dashboard/details');
  }
   function category($id){ //id added
    $category=$this->loadModel('category',true);
     $product= $this->loadModel('product',true);
     $this->menuitem = $category->selectMainMenu();
    $this->submenuitem = $category->selectSubCategoryMenu();

    $this->selectedsubmenu=$category->selectSelectedsubmenu();
    $this->all= $product->SelectAllProduct();

    $this->selected=$product->selectSubCategoryProduct($id); //new functioncreated with id

        $this->loadView('dashboard/category');
  }
  // function categoryname($category_id){
  //     print_r($category_id);
  //     $category=$this->loadModel('category',true);
  //    $product= $this->loadModel('product',true);
  //    $this->menuitem = $category->selectMainMenu();
  //    $this->submenuitem = $category->selectSubCategoryMenu();

  //    $this->sorted=$category->nameOfCategory($category_id);

  //     $this->loadView('dashboard/sortedcategory');

  // }
  function displaySortedProduct($category_id){
    $category=$this->loadModel('category',true);
     $product= $this->loadModel('product',true);
     $this->menuitem = $category->selectMainMenu();
     $this->submenuitem = $category->selectSubCategoryMenu();
       $this->sorted=$category->categoryName($category_id);

       $this->sortedProduct = $product->displaySortedProductModel($category_id);

      $this->loadView('dashboard/sortedcategory');
  }
   function displaySortedSubProduct($subcategory_id){
    $category=$this->loadModel('category',true);
     $product= $this->loadModel('product',true);
     $this->menuitem = $category->selectMainMenu();
     $this->submenuitem = $category->selectSubCategoryMenu();
     //  $this->sorted=$category->categoryName($category_id);

       $this->sortedProduct = $product->displaySortedsubProductModel($subcategory_id);

      $this->loadView('dashboard/sortedcategory');
  }
  // function addToCart($id){
  //   print_r($id);

  //   $category=$this->loadModel('category',true);
  //    $product= $this->loadModel('product',true);
  //    $this->menuitem = $category->selectMainMenu();
  //    $this->submenuitem = $category->selectSubCategoryMenu();
  //    $this->addProduct = $product->addToBasket($id);
  //   $this->loadView('dashboard/basket');
  // }

}

 ?>
