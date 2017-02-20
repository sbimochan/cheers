<?php
class OrderdetailsModel extends Model{

	public $id,$order_id,$product_id,$price,$discount,$color,$quantity;

	function saveOrderDetails(){
		$sql = "insert into tbl_order_details(order_id,product_id,price,discount,color,size,quantity) values ('$this->order_id','$this->product_id','$this->price','$this->discount','$this->color','$this->size','$this->quantity')";

		return $this->insert($sql);
	}
}
?>