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
				} 


				$bill_no = "";
				$sql2 = "SELECT count(pk) as total FROM run_bill2  ";
				$query2 = mysqli_query($objCon,$sql2);
				while($objResult2 = mysqli_fetch_array($query2))
				{
					$total = $objResult2["total"] + 1; 
					$bill_no = "LW-".date('dmY').$load_customer."-".$total; 
				} 

				$strSQL = "INSERT INTO run_bill2 (bill_no) VALUES  ('".$bill_no."')"; 
				$objQuery = mysqli_query($objCon, $strSQL);


				$strSQL = " Update member_order Set 
							create_date = '".date('d-m-Y')."',
							create_date2 = '".date('Y-m-d')."',
							bill_no2 = '".$bill_no."' ,  
							create_time = '".date('H:i')."'  " ;
				$strSQL .=" WHERE member = '".$load_customer."' and bill_no2 = ''  ";  
				$objQuery = mysqli_query($objCon, $strSQL); 

 
				 //echo("<script>alert(' กรุณาทำการแจ้งชำระเงิน บิลเลขที่ ".$bill_no." ')</script>");
				 echo("<script>window.location = 'index.php?table=".$_GET["table"]."';</script>");
?>
 
