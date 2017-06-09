<?php
class ProductModel extends Model{
	public $id,$name,$category_id,$subcategory_id,$color,$country,$product_price,$discount,$stock,$quantity,$status,$feature_key,$slider_key,$image1,$image2,$image3,$image4,$short_description,$description,$created_date,$modified_date,$created_by,$modified_by;

function saveProduct(){
	if($this->category_id != ''){
		 $sql = "insert into tbl_product(category_id,subcategory_id,name,color,country,price,discount,stock,quantity,image1,image2,image3,image4,short_description,description,status,slug,feature_key,slider_key,created_date,created_by)
		values('$this->category_id','$this->subcategory_id','$this->name','$this->color','$this->country','$this->product_price','$this->discount','$this->stock','$this->quantity','$this->image1','$this->image2','$this->image3','$this->image4','$this->short_description','$this->description','$this->status','$this->slug','$this->feature_key','$this->slider_key','$this->created_date','$this->created_by')";

}else{
		 $sql = "insert into tbl_product(category_id,subcategory_id,name,color,price,discount,stock,quantity,image1,image2,image3,image4,short_description,description,status,slug,feature_key,slider_key,created_date,created_by)
		values('$this->category_id','$this->subcategory_id','$this->name','$this->color','$this->country','$this->product_price','$this->discount','$this->stock','$this->quantity','$this->image1','$this->image2','$this->image3','$this->image4','$this->short_description','$this->description','$this->status','$this->slug','$this->feature_key','$this->slider_key','$this->created_date','$this->created_by')";

	 }
//print_r($sql);
	return $this->insert($sql);
}
function SelectAllProduct(){
	$sql = "select * from tbl_product WHERE status=1";
	return $this->select($sql);
}
	function deleteProduct(){
		$sql = "delete from tbl_product where id= '$this->id'";
		return $this->delete($sql);
	}
	function selectProductById(){
		$sql = "select * from tbl_product where id='$this->id'";
		return $this->select($sql);
	}
	function updateProduct(){
		$sql = "update tbl_product set name='$this->name',rank='$this->rank',role='$this->role',status='$this->status',slug='$this->slug',description='$this->description',image='$this->image',parent_id='$this->parent_id',modified_date='$this->modified_date',modified_by='$this->modified_by' where id='$this->id'";

	return $this->update($sql);
}
	function selectMainProduct(){
		$sql = "select * from tbl_product";
	return $this->select($sql);
	}
	function selectMainMenu(){
		$sql = "select * from tbl_category where role='category' and status=1";
	return $this->select($sql);
	}
	function selectSubProductMenu(){
		$sql = "select * from tbl_category where role='subcategory' and status=1";
	return $this->select($sql);
	}
	function selectSliderImages(){
		$sql= "select * from tbl_product where slider_key=1 order by created_date limit 5";
		return $this->select($sql);
	}
	function selectLatestProduct(){
		$sql= "select * from tbl_product where status=1 order by created_date limit 8";
		return $this->select($sql);
	}
public function selectSubCategoryProduct($id){
		$sql ="select tbl_product.*,tbl_category.id as cid,tbl_category.name as cname from tbl_product join  tbl_category on tbl_product.subcategory_id = tbl_category.id where tbl_category.id='$id'  and tbl_product.status=1";
		//echo $sql;
		return $this->select($sql);
	}
	function selectDetails($slug){
		$sql="select * from tbl_product where slug='$slug' ";
		return $this->select($sql);
	}
	function categoryName($category_id){
		$sql ="select tbl_product.*,tbl_category.id as cid,tbl_category.name as cname from tbl_product join  tbl_category on tbl_product.category_id = tbl_category.id where tbl_category.id='$category_id'and tbl_product.status=1";
		return $this->select($sql);
	}
	function displaySortedProductModel($category_id){
		$sql="select * from tbl_product where category_id='$category_id'";
		return $this->select($sql);
	}
	function displaySortedsubProductModel($subcategory_id){
		$sql="select * from tbl_product where subcategory_id='$subcategory_id'";
		return $this->select($sql);
	}
	 // public function nameOfCategory($category_id){
  //       $sql="select tbl_category.*, tbl_product.category_id as cid, tbl_product.name as cname from tbl_product join tbl_category on tbl_product.category_id=tbl_category.id WHERE tbl_product.category_id='$category_id'";
  //       return $this->select($sql);
  //   }
     function addToBasket($id){
     $sql="select * from tbl_product where id='$id'";
     return $this->select($sql);
 }
}
