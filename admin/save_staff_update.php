<?php
session_start();
include('../database.php');
	
	  		  
	$strSQL = "SELECT * FROM member_all WHERE username = '".($_POST['username'])."' and pk != '".$_POST["idupdate"]."' ";
	$objQuery = mysqli_query($objCon, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
			 echo("<script>alert(' Username ซ้ำกับในระบบ!!')</script>");
			 echo("<script>window.location = 'staff.php?CusID=".$_POST["idupdate"]."';</script>");
	}
	else
	{	
		 
				$strSQL = "Update member_all Set  
				 name = '".$_POST["name"]."',      
				 line = '".$_POST["line"]."',      
				 status = '".$_POST["postion"]."',       
				 telphone = '".$_POST["telphone"]."',         
				 username = '".$_POST["username"]."',    
				 password = '".$_POST["password"]."' " ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
				
		 
		
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'staff.php';</script>");
	}
	 
?>