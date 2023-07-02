<?php
session_start();  
include('../database.php'); 
	  


			 
	$sql = "SELECT * FROM member_table Where  tablein = '". $_GET["table"] ."' and ( closebill = '' or closebill = 'กำลังทาน' ) ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$load_name = $objResult["name"];
		$load_telphone = $objResult["telphone"];
		$load_timein = $objResult["timein"];  
		$load_tablein = $objResult["tablein"];  
		$load_customer = $objResult["pk"];   
		
		
		
		$strSQL = " Update member_table Set   closebill = 'เก็บเงิน'  " ;
		$strSQL .=" WHERE pk = '". $objResult["pk"]."' ";  
		$objQuery = mysqli_query($objCon, $strSQL); 
		
	} 

		$strSQL = " Update table_data Set   status = 'เก็บเงิน'  " ;
		$strSQL .=" WHERE pk = '". $_GET["table"]."' ";  
		$objQuery = mysqli_query($objCon, $strSQL); 

 
				 echo("<script>alert(' กรุณาทำการแจ้งชำระเงิน  ')</script>");
				 echo("<script>window.location = '../index_member.php';</script>");
?>
 
