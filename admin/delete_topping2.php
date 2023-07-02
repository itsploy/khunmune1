<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
	 
		$id = $_POST["del"];  

		 	 
 		 
			$strSQL = "Delete From topping_bamee2  ";
			$strSQL .="WHERE pk = '".$id."' ";
			$objQuery = mysqli_query($objCon,$strSQL); 

			$data = array(
				   'ans' => "1" 
				); 


echo json_encode($data);

?>