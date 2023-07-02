<?php
session_start();
include('../database.php');
	
 


			$check_image11 = $_FILES["newAvatar"]["name"]; 
			$update_img11 = "";
  
				if(empty($check_image11)){
					$check_image11 = "";
				}else{
					$check_image11 = "SCGrimg".rand(1,999)."img".rand(110000,999999).".png";
					if(move_uploaded_file($_FILES["newAvatar"]["tmp_name"],"../img/".$check_image11))
					{
						$update_img11  =  ", img ='".$check_image11."'" ;
					} 
				}


				$strSQL = "Update drink Set  name  = '".$_POST["name"]."', price  = '".$_POST["price"]."',
				typedata  = '".$_POST["typedata"]."', total  = '".$_POST["total"]."'   ".$update_img11  ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
				
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'drink.php';</script>");
		 
	 
?>