<?php
session_start();
include('../database.php');
	
 
		if(empty($_SESSION["UserID"])){
			 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
			 echo("<script>window.location = '../index.php';</script>");

		}else{
			 

			$check_image11 = $_FILES["newAvatar"]["name"]; 
			$update_img11 = "";
  
				if(empty($check_image11)){
					$check_image11 = "";
				}else{
					$check_image11 = "RTESCGrimgnamee".rand(1,999)."img".rand(110000,999999).".png";
					if(move_uploaded_file($_FILES["newAvatar"]["tmp_name"],"../img/".$check_image11))
					{
						$update_img11  =  ", img ='".$check_image11."'" ;
					} 
				}


				$strSQL = "Update product Set  name  = '".$_POST["name"]."', price1  = '".$_POST["price1"]."',
				price2  = '".$_POST["price2"]."'  ".$update_img11  ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
				
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'rice.php';</script>");
		 
		}
?>