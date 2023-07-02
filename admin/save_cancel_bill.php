<?php
session_start();
include('../database.php');
	
		  
				    $strSQL = " Update member_order Set status =  '".$_GET["status"]."'  " ;
					$strSQL .=" WHERE pk = '".$_GET["bill_no"]."' "; 
					$objQuery = mysqli_query($objCon, $strSQL);
 
  

?>







