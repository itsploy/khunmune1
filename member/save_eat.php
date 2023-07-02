<?php 
session_start();
include('../database.php');
	  
  
	$sql = "SELECT * FROM member_table Where  tablein = '". $_POST["table"] ."' and ( closebill = '' or closebill = 'กำลังทาน' ) ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$load_name = $objResult["name"];
		$load_telphone = $objResult["telphone"];
		$load_timein = $objResult["timein"];  
		$load_tablein = $objResult["tablein"];  
		$load_customer = $objResult["pk"];    
	} 

	$sql = "SELECT * FROM product Where  pk = '".$_POST["pkeat"]."' order by pk desc  ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{   
		$name = $objResult["name"];  
		$price1 = $objResult["price1"];
		$price2 = $objResult["price2"];  
		$img = $objResult["img"];       
		$bill_no = $objResult["bill_no"];       
		$typedata = $objResult["typedata"]; 
	}

	$price  = 0;
	if($_POST["eattype"] == "ธรรมดา"){
		$price  = $price1;
	}else if($_POST["eattype"] == "พิเศษ"){
		$price  = $price2;
	}

	$strSQL = "INSERT INTO member_order (bill_no, bill_no2, member, menu, total,
	eattype, create_date, create_date2, create_time, status, topping1, topping2, 
	note,  typedata, price, tablein ) VALUES 
	(
	'' ,'' ,'".$load_customer."' ,'".$_POST["pkeat"]."' ,'1',
	'".$_POST["eattype"]."', '', '', '', 'อยู่ในระหว่างทำ', '".$_POST["topping1"]."', '".$_POST["topping2"]."' , 
	'".$_POST["note"]."',   '".$typedata."',   '".$price."',   '".$load_tablein."'   
	)"; 
	$objQuery = mysqli_query($objCon, $strSQL);



	echo("<script>window.location = 'index.php?table=".$_POST["table"]."';</script>");
	
 
?>