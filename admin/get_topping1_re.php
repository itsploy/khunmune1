<?php
session_start();
include('../database.php');
    
    $html = '';

	$loaddate = date('d-m-Y'); 
	$bill_no = $_GET["bill_no"]; 
	 
 
										$i = 1; 
									    $bg = "#F8FAFD"; 
										$sql = "  
										SELECT *  FROM topping_bamee1  
										where name != '' and bill_no = '".$bill_no."'
										order by  pk asc "; 
										$query = mysqli_query($objCon,$sql); 
										while($objResult = mysqli_fetch_array($query))
										{  
											if($bg == "#FFF"){ 
												$bg = "#F8FAFD"; 
											}else{  
												$bg = "#FFF"; 
											}  		
									?> 
   							  
									  
									 <div class="col-lg-12 " style="margin-top: 10px; border: 1px solid #E0E0E0; border-radius: 5px; background-color: <?php echo $bg; ?>;  " >
											<div class="row"  >
											<div class="col-lg-8 ">
											<div class="form-group" style="margin-top: 15px;"  >   
											 <div  style="margin-top: 10px;" >    
											 <font color="black" size="3px" class="serif">  <?php echo $i.". ".$objResult["name"]; ?> </font> 
											 </div>  
											</div>  
											</div>
											<div class="col-lg-4 " align="right">
											<div class="form-group" style="margin-top: 10px;"  >  

											  <a  class=" btn-delete-fuck1"   data-id="<?php echo $objResult["pk"]; ?>" >
											   <button type="button" class="btn btn-sm btn-primary" style="background-color: #FD938F; border-radius: 5px;   border: 1px solid  #FD938F;   "> <font color="#000000" size="2px" class="serif1" >  ลบ  </font> </button>
											 </a>  
  
											</div> 
											</div> 
											</div> 
									 </div>  
								
								
									<?php $i++; } ?>
								 

<script> 
		function Commas(str)
		{
			var parts = str.toString().replace("," ,"").split(".");
			parts[0] = parts[0].replace("," ,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			return parts.join(".");
		}
function numberWithCommas(x) {
    x = x.toString();
    var pattern = /(-?\d+)(\d{3})/;
    while (pattern.test(x))
        x = x.replace(pattern, "$1,$2");
    return x;
}
	function numberWithCommas2(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
</script>



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