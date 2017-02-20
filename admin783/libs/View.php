<?php 
class View{
	public function loadView($name){
		require_once "view/layout/header.php";
		
			$path='view/'.$name.'.php';
			require_once "$path";
			require_once "view/layout/footer.php";
	}
}



?>