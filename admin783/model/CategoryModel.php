<?php

class CategoryModel extends Model
{
    public $id,$name,$role,$parent_id,$status,$image,$description,$created_date,$modified_date,$created_by,$modified_by;
    public function saveCategory()
    {
        if ($this->parent_id != '') {
             $sql = "insert into tbl_category(name,rank,role,status,slug,description,image,parent_id,created_date,created_by)
		values('$this->name','$this->rank','$this->role','$this->status','$this->slug','$this->description','$this->image','$this->parent_id','$this->created_date','$this->created_by')";
        } else {
             $sql = "insert into tbl_category(name,rank,role,status,slug,description,image,created_date,created_by)
		values('$this->name','$this->rank','$this->role','$this->status','$this->slug','$this->description','$this->image','$this->created_date','$this->created_by')";
        }

    return $this->insert($sql);
    }
    public function SelectAllCategory()
    {
        $sql = 'select * from tbl_category order by created_date desc';

        return $this->select($sql);
    }
    public function SelectAllCategoryByID($id)  //new function created
    {
        $sql = "select * from tbl_category order by created_date desc where id='$this->id' ";

        return $this->select($sql);
    }
    public function deleteCategory()
    {
        $sql = "delete from tbl_category where id= '$this->id'";

        return $this->delete($sql);
    }
    public function selectCategoryById()
    {
        $sql = "select * from tbl_category where id='$this->id'";

        return $this->select($sql);
    }
    public function updateCategory()
    {
        $sql = "update tbl_category set name='$this->name',rank='$this->rank',role='$this->role',status='$this->status',slug='$this->slug',description='$this->description',image='$this->image',parent_id='$this->parent_id',modified_date='$this->modified_date',modified_by='$this->modified_by' where id='$this->id'";

        return $this->update($sql);
    }
    public function selectMainCategory()
    {
        $sql = "select * from tbl_category where role='category'";

        return $this->select($sql);
    }
    public function selectMainMenu()
    {
        $sql = "select * from tbl_category where role='category' and status=1";

        return $this->select($sql);
    }
    public function selectSubCategoryMenu()
    {
        $sql = "select * from tbl_category where role='subcategory' and status=1";

        return $this->select($sql);
    }
    public function selectSelectedsubmenu(){
        $sql="select * from tbl_category where role='subcategory' and parent_id='$this->parent_id'";
        return $this->select($sql);
    }
    public function categoryname($category_id){
        $sql="select * from tbl_category where id='$category_id'";
        return $this->select($sql);
    }
   public function nameOfCategory($slug){
        $sql="SELECT tbl_category.*, tbl_product.category_id AS cid, tbl_product.name AS cname FROM tbl_product JOIN tbl_category ON tbl_product.category_id = tbl_category.id WHERE tbl_product.slug = '$slug'";
        return $this->select($sql);
    }
    public function nameOfsubCategory($slug){
        $sql="SELECT tbl_category.*, tbl_product.subcategory_id AS cid, tbl_product.name AS cname FROM tbl_product JOIN tbl_category ON tbl_product.subcategory_id = tbl_category.id WHERE tbl_product.slug = '$slug'";
        return $this->select($sql);
    }
   
}
