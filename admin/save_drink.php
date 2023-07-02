<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
  
	 	$check_image11 = $_FILES["newAvatar"]["name"]; 
		$update_img11 = "";
  
			if(empty($check_image11)){
				$check_image11 = "";
			}else{
				$check_image11 = "SGrimg".rand(1,999)."img".rand(110000,999999).".png";
				if(move_uploaded_file($_FILES["newAvatar"]["tmp_name"],"../img/".$check_image11))
				{
					$update_img11  =  $check_image11 ;
				} 
			}
		 
		$strSQL = "INSERT INTO drink (
		 name, price, typedata, total, img 
		 ) VALUES (
		  '".$_POST["name"]."',  '".$_POST["price"]."', '".$_POST["typedata"]."', '".$_POST["total"]."', '".$update_img11."' 
		)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		
		//echo $strSQL;
		//echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		echo("<script>window.location = 'drink.php';</script>");
		
	 
	 
?>