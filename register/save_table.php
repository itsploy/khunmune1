<meta charset="utf-8">
<?php
include('../database.php');
	
	   
	$check_on = "on";
	$sql2 = "SELECT * FROM table_data where name != '' and pk = '".$_GET["table"]."' order by pk asc  ";
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{   
		$check_on = $objResult2["status"];
	}	 

	if($check_on == "ว่าง"){
		 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
		
		$strSQL = "INSERT INTO member_table (
		 name, telphone, timein, create_date, create_date2,   tablein 
		 ) VALUES (
		  '".$_GET["data1"]."',  '".$_GET["data2"]."', '".$_GET["timesave"]."', 
		  '".date('d-m-Y')."', '".date('Y-m-d')."',  '".$_GET["table"]."'  
		)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		
		
		
		
		$strSQL = "Update table_data Set   status = 'ไม่ว่าง'  " ;
		$strSQL .=" WHERE pk = '". $_GET["table"]."' "; 

		$objQuery = mysqli_query($objCon, $strSQL); 
		
		
		echo("<script>alert(' จองโต๊ะเรียบร้อย !! ')</script>");
		echo("<script>window.location = '../index_member.php';</script>");
		
	}else{
		echo("<script>alert(' โต๊ะนี้ได้มีการจองไปแล้ว !! ')</script>");
		echo("<script>window.location = 'next_page2.php?data1=".$_GET["data1"]."&data2=".$_GET["data2"]."';</script>");
		
	}

  
	 
?>