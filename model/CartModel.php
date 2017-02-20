<?php
class CartModel extends Model{
	public $id,$product_id,$session_id,$customer_id,$quantity,$price,$discount,$color,$created_timestamp;


	function saveCart(){
		$sql = "insert into tbl_cart(product_id,quantity,price,discount,color,size,session_id,created_timestamp) values ('$this->product_id','$this->quantity','$this->price','$this->discount','$this->color','$this->size','$this->session_id','$this->created_timestamp')";

		return $this->insert($sql);
	}

	public function selectCurrentCartItem()
	{
		//$sql = "select * from tbl_cart where session_id='$this->session_id'";
		$sql = "select c.*,p.image1,p.name,p.stock from tbl_cart as c join tbl_product as p on c.product_id=p.id where c.session_id='$this->session_id'";
		return $this->select($sql);
	}

	public function selectCartItemByAttribute()
	{
		$sql = "select * from tbl_cart where session_id='$this->session_id' and product_id='$this->product_id' and color='$this->color' and size='$this->size' ";
		return $this->select($sql);
	}

	public function updateCartQuantity()
	{
		$sql = "update tbl_cart set quantity='$this->quantity' where id='$this->id'";
		return $this->update($sql);
	}

	public function deleteCartItem()
	{
		$sql = "delete from tbl_cart where id='$this->id'";
		return $this->delete($sql);
	}

	

	
}

?>