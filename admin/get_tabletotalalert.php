<?php
session_start();
    include('../database.php');
    
    $html = '';

	$addcode1 = "";
	$addcode2 = "";
	$addcode3 = "";

	  
		$loaddate = date('d-m-Y'); 
		
		$date_income = date('d')."/".date('m')."/".(date('Y')+543);  
			  
		$showdataon = date('d');
	 
    $i = 0;
    $sql_job = "  SELECT * FROM member_order where bill_no = '' and bill_no2 != ''   order by pk desc  ";   
    $query = mysqli_query($objCon,$sql_job); 
    while($objResult = mysqli_fetch_array($query))
    {  
        $i++; 
    }

	  

    print_r($i);
?>
 