<?php
				function DateThai($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strDay";
				}
				function DateThai2($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strMonthThai $strYear";
				}   
				function DateThai3($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strMonthThai ";
				}  
				function DateThai4($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return " $strYear";
				}  
	?>
<?php
	 function DateDiff($strDate1,$strDate2)
	 {
				return (strtotime($strDate2) - strtotime($strDate1))/  ( 60 * 60 * 24 );  // 1 day = 60*60*24
	 }
	 function TimeDiff($strTime1,$strTime2)
	 {
				return (strtotime($strTime2) - strtotime($strTime1))/  ( 60 * 60 ); // 1 Hour =  60*60
	 }
	 function DateTimeDiff($strDateTime1,$strDateTime2)
	 {
				return (strtotime($strDateTime2) - strtotime($strDateTime1))/  ( 60 * 60 ); // 1 Hour =  60*60
	 } 
?>
<?php
session_start();
include('../database.php');

  
 
$html = '';
$output = '';
$query = "   SELECT * FROM member_order where bill_no = '' and bill_no2 != '' Group By bill_no   order by pk desc  ";
$result = mysqli_query($con, $query); 

$countid = 0;
$sumall = 0; 
$lange_money_add = 0; 
if(mysqli_num_rows($result) > 0)
{
	 
while($row = mysqli_fetch_array($result)) 
{    
		 	 
		$sql = "SELECT * FROM table_data Where  pk = '". $row["tablein"] ."' ";  
		$query = mysqli_query($objCon,$sql); 
		while($objResult = mysqli_fetch_array($query))
		{  
			$name = $objResult["name"];   
		}  
		  
		 if($row["total"] <= 10){
				 $html .= '  
				 
				 		<li class="nav-item">
						  <a class="dropdown-item" href = "#" > 
							<span>
							  <span> <font size="3px" color = "red" >  '.$name.' </font>  </span> 
							  <br>
							</span>
							<span class="message">
							<font size="3px" color = "black" >    
							<font size="3px" color = "black" >    
							'; 
			 					$sql = "SELECT * FROM member_order where bill_no2 != '' 
										and bill_no = '' 
										and tablein = '".$row["tablein"]."' 
										order by pk asc  ";   
										$query = mysqli_query($con,$sql); 
										while($objResult = mysqli_fetch_array($query))
										{  
											$price = $objResult["price"];
											$eattype = $objResult["eattype"];

											$toppingdata = "";
											$nametop1 = "-";
											$nametop2 = "-";
											$nametop3 = "-"; 
											if($objResult["typedata"] == "เครื่องดื่ม"){
										
												$img = "";
												$sql2 = "SELECT * FROM drink where pk = '".$objResult["menu"] ."' ";
												$query2 = mysqli_query($objCon,$sql2); 
												while($objResult2 = mysqli_fetch_array($query2))
												{ 
													$code = "dr-".$objResult2["name"];  
													$img = $objResult2["img"];
													$namepro = $objResult2["name"];   
												}

											}else{

												$img = "";
												$sql2 = "SELECT * FROM product where pk = '".$objResult["menu"] ."' ";
												$query2 = mysqli_query($objCon,$sql2); 
												while($objResult2 = mysqli_fetch_array($query2))
												{ 
													$code = "et".$objResult2["pk"];  
													$namepro = $objResult2["name"];  
													$img = $objResult2["img"]; 
												}
												
												
												if($objResult["typedata"] == "ก๋วยเตี๋ยว"){
											 
													$sql2 = "SELECT * FROM topping_bamee1 where pk = '".$objResult["topping1"] ."' ";
													$query2 = mysqli_query($objCon,$sql2); 
													while($objResult2 = mysqli_fetch_array($query2))
													{ 
														$nametop1 = $objResult2["name"];   
													}
													$sql2 = "SELECT * FROM topping_bamee2 where pk = '".$objResult["topping2"] ."' ";
													$query2 = mysqli_query($objCon,$sql2); 
													while($objResult2 = mysqli_fetch_array($query2))
													{ 
														$nametop2 = $objResult2["name"];   
													}


												}else if($objResult["typedata"] == "จานเดียว"){ 

													$sql2 = "SELECT * FROM topping_bamee3 where pk = '".$objResult["topping2"] ."' ";
													$query2 = mysqli_query($objCon,$sql2); 
													while($objResult2 = mysqli_fetch_array($query2))
													{ 
														$nametop3 = $objResult2["name"];   
													} 
												}
  
											}
			 
											
							$html .=' รายการ : '. $namepro . "<br> " ;
							$html .=' เส้น : '. $nametop2 . "<br> ";
							$html .=' เครื่องเคียง : '. $nametop3. "<br> " ;
							$html .=' จำนวน : '. number_format(0+$objResult["total"]). " <br> " ;
							$html .=' หมายเหตุ : '. $objResult["note"]. " <br> 
							<hr> " ; 
										} 
			 
			 				$html .='   
							</font>  </font> 
							</span>
						  </a>  
						</li>  '; 
			 
	 		} 
		  
}
	
}
  
	 
	
    print_r($html);
 

?>
