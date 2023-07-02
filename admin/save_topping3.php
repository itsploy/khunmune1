<?php 
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
 
			$drop_subject = $_GET["drop_subject"] ;    
			$member = $_SESSION["UserID"] ;         
 
   
 
				$strSQL = "INSERT INTO topping_bamee3 ( name, bill_no, create_by ) VALUES  ( '".$drop_subject."', '', '".$member."'  )"; 
				$objQuery = mysqli_query($objCon, $strSQL);
  
		$data = array(
			'ans' => "1" 
		); 


echo json_encode($data);	  
?>