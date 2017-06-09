<?php
class CategoryModel extends Model{

    public $id,$parent_id,$name,$slug,$status,$rank,$role,$created_by,$modified_by,$created_date,$modified_date;

    function saveCategory(){
        //print_r($this);
        if (!empty($this->parent_id)){
            $sql = "insert into tbl_category (role,parent_id,name,slug,rank,status,created_by,created_date) values ('$this->role','$this->parent_id','$this->name','$this->slug','$this->rank','$this->status','$this->created_by','$this->created_date')";
        }else{
            $sql = "insert into tbl_category (role,name,slug,rank,status,created_by,created_date) values ('$this->role','$this->name','$this->slug','$this->rank','$this->status','$this->created_by','$this->created_date')";
        }
        //echo $sql;
        return $this->insert($sql);
    }
    function selectAllCategory(){
        $sql ="select * from tbl_category";
        return $this->select($sql);
    }
    function deleteCategory(){
        $sql = "delete from tbl_category where id='$this->id'";
        return $this->delete($sql);
    }
    function selectCategoryById(){
        $sql ="select * from tbl_category where id='$this->id'";
        return $this->select($sql);
    }
    function updateCategory(){
        //print_r($this);
        if (!empty($this->parent_id)){
            $sql = "update tbl_category set role='$this->role',parent_id='$this->parent_id',name='$this->name',slug='$this->slug',rank='$this->rank',status='$this->status',modified_by='$this->modified_by',modified_date='$this->modified_date' where id='$this->id'";
        }else{
            $sql = "update tbl_category set role='$this->role',name='$this->name',slug='$this->slug',rank='$this->rank',status='$this->status',modified_by='$this->modified_by',modified_date='$this->modified_date' where id='$this->id'";
        }
        // echo $sql;
        return $this->update($sql);
    }
    public function selectAllMainCategory()
    {
        $sql ="select * from tbl_category where role='category'";
        return $this->select($sql);

    }
    function selectSubcategory()
    {
        $sql ="select * from tbl_category where role='subcategory'
 and parent_id='$this->parent_id'";
        return $this->select($sql);

    }
    public function selectAllActiveMainCategory()
    {
        $sql ="select * from tbl_category where role='category' and status=1";
        return $this->select($sql);

    }
    function selectAllActiveSubcategory()
    {
        $sql ="select * from tbl_category where role='subcategory' and status=1";
        return $this->select($sql);

    }
    public function getCategoryNameBySlug(){
        $sql ="select name from tbl_category where role='category' and slug='$this->slug'";
        return $this->select($sql);
    }

    public function getSubCategoryNameBySlug(){
        $sql ="select name from tbl_category where role='subcategory' and slug='$this->slug'";
        return $this->select($sql);
    }
    public function selectMainMenu(){
      $sql="select * from tbl_category where role='category'";
      return $this->select($sql);
    }
    public function selectSubCategoryMenu(){
        $sql="select * from tbl_category where role='subcategory'";
        return $this->select($sql);
    }
    public function nameOfCategory(){
        $sql="select * from tbl_category where slug='$this->slug' AND
        role='category'";
        return $this->select($sql);
    }
    public function nameOfSubCategory(){
        $sql="select * from tbl_category where slug='$this->slug' and
        role='subcategory'";
        return $this->select($sql);
    }
    public function selectSelectedsubmenu(){
        $sql="select * from tbl_category where slug='$this->slug' and
        role='subcategory'";
        return $this->select($sql);
    }
    public function categoryName(){
        $sql="select * from tbl_category where id='$this->id' and
        role='category'";
        return $this->select($sql);
    }
}


