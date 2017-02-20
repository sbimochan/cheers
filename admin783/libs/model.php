<?php
class Model{
	protected $conn;
	function connect(){
		$this->conn = new mysqli('localhost','root','','cheersdb');
		if($this->conn->connect_errno !=0){
			die('Database Connection Error');
		}
	}
	function checkUserInput($value){
		$this->connect();
		$value = $this->conn->real_escape_string($value);
		$value=htmlentities($value);
		return $value;
	}
	function insert($sql){
		$this->connect();
		$this->conn->query($sql);
	//	print_r($this->conn);
		if($this->conn->insert_id !=0){
			return $id = $this->conn->insert_id;
			//return true;
		}
		else{
			return false;


		}
	}
	function select($sql){
		$this->connect();
		$res = $this->conn->query($sql);
		$data  = [];
		if($res->num_rows > 0){
			while($a = $res->fetch_object()){
				array_push($data,$a);
			}
		}
		return $data;
	}
	function delete($sql){
		$this->connect();
		if($this->conn->query($sql)){
			return true;
		}else{
			return false;
		}
	}
	function update($sql){

		//database connection
		$this->connect();
		//execute query
		$this->conn->query($sql);
		//check insert status
		if($this->conn->affected_rows==1){
			$id = $this->conn->insert_id;
			return  true;
		} else {
			return  false;
		}
	}



}
