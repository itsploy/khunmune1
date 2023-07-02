<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
  		if(empty($_SESSION["UserID"])){
			 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
			 echo("<script>window.location = '../index.php';</script>");

		}else{
			 
	 	$check_image11 = $_FILES["newAvatar"]["name"]; 
		$update_img11 = "";
  
			if(empty($check_image11)){
				$check_image11 = "";
			}else{
				$check_image11 = "SGrimgbameeR".rand(1,999)."img".rand(110000,999999).".png";
				if(move_uploaded_file($_FILES["newAvatar"]["tmp_name"],"../img/".$check_image11))
				{
					$update_img11  =  $check_image11 ;
				} 
			}
		 


        $bill_nocount = 1;
		$sql2 = " SELECT * FROM run_product   order by pk asc   ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$bill_nocount ++;
		}

		$bill_no = "PDBAMEE"."".date('Ydm')."-".$bill_nocount;
		 
		$strSQL = "INSERT INTO run_product ( bill_no  ) VALUES  ( '".$bill_no."' )"; 
		$query2 = mysqli_query($objCon,$strSQL);
  

		$strSQL = "INSERT INTO product (
		 name, price1, price2, img, bill_no, typedata 
		 ) VALUES (
		  '".$_POST["name"]."',  '".$_POST["price1"]."', '".$_POST["price2"]."', '".$update_img11."', '".$bill_no."', 'จานเดียว' 
		)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
			
			
		$strSQL = " Update topping_bamee3 Set  bill_no = '".$bill_no."'  " ;
		$strSQL .=" WHERE  bill_no = '' and create_by = '".$_SESSION["UserID"]."' "; 
		$objQuery = mysqli_query($objCon, $strSQL);	
			
			
		//echo $strSQL;
		//echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		echo("<script>window.location = 'rice.php';</script>");
		
	 
		}
?>