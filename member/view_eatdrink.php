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

	$sql = "SELECT * FROM drink Where  pk = '".$_GET["pkeat"]."' order by pk desc  ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{   
		$name = $objResult["name"];  
		$price = $objResult["price"];
		$typedata = $objResult["typedata"];  
		$total = $objResult["total"];        
	}


	if($total < 1){
		 
	echo("<script>alert(' รายการสินค้าหมด ')</script>");
	echo("<script>window.location = 'index.php?table=".$_GET["table"]."';</script>");
	}else{
		 
		
	$strSQL = "SELECT * FROM member_order WHERE bill_no2 = '' and member = '".$load_customer."'   
	and menu = '".$_GET["pkeat"]."' and typedata = 'เครื่องดื่ม'  "; 
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);  
	if(!$objResult)
	{   
				
				
	$strSQL = "INSERT INTO member_order (bill_no, bill_no2, member, menu, total,
	eattype, create_date, create_date2, create_time, status, topping1, topping2, 
	note,  typedata, price, tablein ) VALUES 
	(
	'' ,'' ,'".$load_customer."' ,'".$_GET["pkeat"]."' ,'1',
	'ธรรมดา', '', '', '', 'อยู่ในระหว่างทำ', '', '' , 
	'',   'เครื่องดื่ม', '".$price."',   '".$load_tablein."' 
	)"; 
	$objQuery = mysqli_query($objCon, $strSQL);
		
		
	
	$total_check = 0;
	$sql2 = "SELECT * FROM drink where pk = '".$_GET["pkeat"]."'  ";
	$query2 = mysqli_query($objCon,$sql2);
	while($objResult2 = mysqli_fetch_array($query2))
	{
		$total_check = $objResult2["total"];  
	} 

	$cal_total = $total_check - 1;
	$strSQL = " Update drink Set total = '".$cal_total."'  " ;
	$strSQL .=" WHERE pk = '".$_GET["pkeat"]."' "; 
	$objQuery = mysqli_query($objCon, $strSQL);	
	
	} 
		
		
		

	echo("<script>window.location = 'index.php?table=".$_GET["table"]."';</script>");
	}

 
	
 
?>