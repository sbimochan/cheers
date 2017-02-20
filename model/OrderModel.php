<?php
class OrderModel extends Model{

	public $id,$payment_id,$customer_id,$amount,$discount,$order_date,$status;

	function saveOrder(){
		$sql = "insert into tbl_order(payment_id,customer_id,amount,discount,order_date,status) values ('$this->payment_id','$this->customer_id','$this->amount','$this->discount','$this->order_date','$this->status')";

		return $this->insert($sql);
	}
}
?>