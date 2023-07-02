<?php
session_start();  
include('../database.php'); 
	  


				$sql = "SELECT * FROM member_table Where  tablein = '". $_GET["table"] ."' and ( closebill = '' or closebill = 'กำลังทาน' or closebill = 'เก็บเงิน' ) ";  
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
				$sql2 = "SELECT count(pk) as total FROM run_bill3  ";
				$query2 = mysqli_query($objCon,$sql2);
				while($objResult2 = mysqli_fetch_array($query2))
				{
					$total = $objResult2["total"] + 1; 
					$bill_no = "CLW-".date('dmY').$load_customer."-".$total; 
				} 

				$strSQL = "INSERT INTO run_bill3 (bill_no) VALUES  ('".$bill_no."')"; 
				$objQuery = mysqli_query($objCon, $strSQL);


				$strSQL = " Update member_order Set 
							date_start = '".date('d-m-Y')."',
							date_start2 = '".date('Y-m-d')."',
							bill_no = '".$bill_no."' ,  
							date_time = '".date('H:i')."'  " ;
				$strSQL .=" WHERE member = '".$load_customer."' and bill_no = ''  ";  
				$objQuery = mysqli_query($objCon, $strSQL); 

				$strSQL = " Update table_data Set  status = 'ว่าง'   " ;
				$strSQL .=" WHERE pk = '".$_GET["table"]."'   ";  
				$objQuery = mysqli_query($objCon, $strSQL); 


				$strSQL = " Update member_table Set  closebill = 'เช็คบิลแล้ว'   " ;
				$strSQL .=" Where  tablein = '". $_GET["table"] ."' and ( closebill = '' or closebill = 'กำลังทาน' or closebill = 'เก็บเงิน' )   ";  
				$objQuery = mysqli_query($objCon, $strSQL); 
 
				 //echo("<script>alert(' กรุณาทำการแจ้งชำระเงิน บิลเลขที่ ".$bill_no." ')</script>");
				 echo("<script>window.location = 'index.php';</script>");
?>
 
