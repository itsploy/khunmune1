<?php
session_start();  
header('Content-Type: application/json');
include('../database.php'); 
	 
 
			$id = $_GET["id"];
			$total = $_GET["total"];
			$menuid = $_GET["menuid"];; 
  
				
			$total_bk = 0;
			$sql = "SELECT * FROM member_order Where pk = '".$id."'   and menu = '".$menuid."'";  
			$query = mysqli_query($objCon,$sql); 
			while($objResult = mysqli_fetch_array($query))
			{  
				$check_type = $objResult["typedata"];  
				$total_bk = $objResult["total"];  
			} 

			if($check_type == "เครื่องดื่ม"){
				
					/// เช็คจำนวนคงเหลือก่อน ว่าเหลือพอ เท่าจำนวนที่สั่งซื้อหรือไม่ /// 
				$total_check = 0;
				$sql2 = "SELECT * FROM drink where pk = '".$menuid."'  ";
				$query2 = mysqli_query($objCon,$sql2);
				while($objResult2 = mysqli_fetch_array($query2))
				{
					$total_check = $objResult2["total"];  
				} 
				if($total_check < $total){
				$data = array(
				   'ans' => "1" 
				); 
				}else{ 
					
				$cal_total = ($total_check+$total_bk) - $total;
				$strSQL = " Update drink Set total = '".$cal_total."'  " ;
				$strSQL .=" WHERE pk = '". $menuid ."' "; 
				$objQuery = mysqli_query($objCon, $strSQL);
				
				
				$strSQL = " Update member_order Set total = '".$total."'  "  ;
				$strSQL .=" WHERE pk = '".$id."'   and menu = '".$menuid."'  ";
			 	$objQuery = mysqli_query($objCon, $strSQL); 
				 
				$data = array(
				   'ans' => "0" 
				);
					
				}
				 
			}else{
				
				$strSQL = "Update member_order Set total = '".$total."'  "  ;
				$strSQL .=" WHERE  pk = '".$id."'   and menu = '".$menuid."'  ";
				$objQuery = mysqli_query($objCon, $strSQL); 

				$data = array(
					'ans' => "0" 
				);
			} 
		    
				   
echo json_encode($data);
?>