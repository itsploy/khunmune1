<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
  
	$strSQL = "SELECT * FROM member_all WHERE username = '".($_POST['username'])."' ";
	$objQuery = mysqli_query($objCon, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
			 echo("<script>alert(' Username ซ้ำกับในระบบ!!')</script>");
			 echo("<script>window.location = 'staff.php';</script>");
	}
	else
	{	
		 
		$strSQL = "INSERT INTO member_all (
		 name, username, password, status, line,      
		 telphone 
		 ) VALUES (
		  '".$_POST["name"]."',  '".$_POST["username"]."', '".$_POST["password"]."', '".$_POST["postion"]."',  '".$_POST["line"]."',   
		  '".$_POST["telphone"]."'  
		)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		
		//echo $strSQL;
		//echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		echo("<script>window.location = 'staff.php';</script>");
		
	}
	 
?>