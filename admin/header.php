 <?php 
 include("../database.php");

	if(empty($_SESSION["UserID"])){
		 // echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	} 
	 
ini_set("memory_limit","10M");
?>
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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/logo3.ico" type="image/ico" />

    <title> ร้านก๋วยเตี๋ยวเรือคุณหมื่น สูตรโบราณ </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
 
    <link href="build/css/custom.min.css" rel="stylesheet">
    
    
	
	<link rel="stylesheet" media="all" type="text/css" href="jquerydatepicker/jquery-ui.css" />
    <link rel="stylesheet" media="all" type="text/css" href="jquerydatepicker/jquery-ui-timepicker-addon.css" />
        
        <script type="text/javascript" src="jquerydatepicker/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="jquerydatepicker/jquery-ui.min.js"></script>
        
        <script type="text/javascript" src="jquerydatepicker/jquery-ui-timepicker-addon.js"></script>
        <script type="text/javascript" src="jquerydatepicker/jquery-ui-sliderAccess.js"></script>
        
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
        
  </head>
  
 <style>
@font-face {
  font-family: SukhumvitSet-Medium;
  src: url('../fonts/NotoSansThai-Regular.ttf'); 
}

@font-face {
  font-family: SukhumvitSet-SemiBold;
  src: url('../fonts/NotoSansThai-Regular.ttf'); 
} 
	 
.serif {
  font-family:  SukhumvitSet-Medium, serif;
} 
.serif2 {
  font-family:  SukhumvitSet-SemiBold, serif;
}

</style>
 
  <body class="nav-md serif " style="background-color: #F5F5F7;">
    <div class="container body"  style="background-color: #CF6404;" >
      <div class="main_container"  style="background-color: #334148;" >
        <div class="col-md-3 left_col"   style="background-color: #CF6404;" >
          <div class="left_col scroll-view" style="background-color: #334148;"> 
           
              <div class="navbar nav_title"  style="background-color: #CF6404;   margin-top: -2px; " align="left">
              <a href="index.php" class="site_title"   > 
              <img src="../logo.png" style="width: 35px; "> 
              <font size="2px" class="serif"  color="#FFF" style="font-size: 15px;"> ร้านก๋วยเตี๋ยวเรือคุณหมื่น </font>  
              </a> 
              </div>

            <div class="clearfix"></div> 
            <br />
			 <?php 
						$loaddata = $_SESSION["load"];

			  				$page1 = "#FFFFFF"; 
							$page2 = "#FFFFFF";  
							$page3 = "#FFFFFF";  
							$page4 = "#FFFFFF";  
							$page5 = "#FFFFFF";  
							$page6 = "#FFFFFF";  
							$page7 = "#FFFFFF";    
							$page8 = "#FFFFFF";    
							$page9 = "#FFFFFF";  
							 
			 ?>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print  " style="background-color: #334148; margin-top: -10px; ">
              <div class="menu_section">
                 
                <ul class="nav side-menu">
                 	
                  
                  	
                  	<li style="margin-top: -8px; "><a href="index.php"> &nbsp; <img src="images/c2.png"  style="width: 8px; margin-left: 3px;" > <font size="1px" style=" font-size: 14px; "  color="#FFF"> ตรวจสอบรายการสั่งอาหาร </font> </a>  </li> 
                               
                  	<li style="margin-top: -8px; "><a href="member_table.php"> &nbsp; <img src="images/c2.png"  style="width: 8px; margin-left: 3px; " > <font size="1px" style=" font-size: 14px; "  color="#FFF"> ข้อมูลการจองโต๊ะ   </font> </a>  </li> 
                  	                 
                  	<li style="margin-top: -8px; "><a href="qr.php"> &nbsp; <img src="images/c2.png"  style="width: 8px; margin-left: 3px; " > <font size="1px" style=" font-size: 14px; "  color="#FFF"> จัดการ QRCODE โต๊ะ   </font> </a>  </li> 
                  	
                  	
                  	<?php if($_SESSION["Status"] == "A"){  ?> 
                  	<li style="margin-top: -8px; "><a href="staff.php"> &nbsp; <img src="images/c2.png"  style="width: 8px; margin-left: 3px; " > <font size="1px" style=" font-size: 14px; "  color="#FFF"> จัดการข้อมูลพนักงาน  </font> </a>  </li> 
                  	<?php } ?>
                  	
                  	<li style="margin-top: -8px; "><a href="product.php"> &nbsp; <img src="images/c2.png"  style="width: 8px; margin-left: 3px; " > <font size="1px" style=" font-size: 14px; "  color="#FFF"> จัดการข้อมูลรายการอาหาร   </font> </a>  </li> 
                  	
                  	<li style="margin-top: -8px; "><a href="drink.php"> &nbsp; <img src="images/c2.png"  style="width: 8px; margin-left: 3px; " > <font size="1px" style=" font-size: 14px; "  color="#FFF"> จัดการรายการเครื่องดื่ม   </font> </a>  </li> 
                  	
                  	<?php if($_SESSION["Status"] == "A"){  ?> 
                  	<li style="margin-top: -8px; "><a href="report.php"> &nbsp; <img src="images/c2.png"  style="width: 8px; margin-left: 3px; " > <font size="1px" style=" font-size: 14px; "  color="#FFF"> สรุปยอดรายงานขาย   </font> </a>  </li> 
                  	<?php } ?>
                  	
                  	<li style="margin-top: -8px; "><a href="profile.php"> &nbsp; <img src="images/c2.png"  style="width: 8px; margin-left: 3px; " > <font size="1px" style=" font-size: 14px; "  color="#FFF"> เเก้ไขข้อมูล   </font> </a>  </li> 
                  	
                  	<li style="margin-top: -8px; "><a href="../check_out.php"> &nbsp; <img src="images/c2.png"  style="width: 8px; margin-left: 3px; " > <font size="1px" style=" font-size: 14px; "  color="#FFF"> ออกจากระบบ   </font> </a>  </li> 
                 	   
                 	    
                </ul>
              </div> 
            </div>
            <!-- /sidebar menu -->

           
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav"  >
          <div class="nav_menu"  style="background-color: #FFFFFF; height: 57px;  ">
              <div class="nav toggle" >
                <a id="menu_toggle"> <img src="images/bar.png" style="width: 28px; display: none; ">  </a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  
                  
                   <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/bell.png" style="width: 20px; height: 20px; " >  
                       <font id="countclickdata" class="count" size="2px" color="#FFF" style="margin-left: -26px; font-size: 10px; " >     0    </font>   
                   </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown"> 
                     
                  	<div id="showbillalldata" >  </div> 
                     
                    </div>
                  
                    &nbsp;&nbsp;&nbsp;&nbsp;
                  
                    <font size="3px" color="#000">   <?php // echo $_SESSION["Fullname"]; ?>   
                      สถานะ: <?php if($_SESSION["Status"] == "A"){ echo " แอดมิน "; }else{ echo " พนักงาน "; } ?> </font> 
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;
                   <a href="../check_out.php">  <font size="3px" color="#000"> <u>  ออกจากระบบ   </u>  </font> </a>
                   
                    
                   
                </li> 
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

		  <style> 
						@media only screen and (max-width: 767px){
							.tablemobile{
								width: 1280px;
							}
						} 
						</style>	 
						
						
						
						
  		    <input type="hidden" id="checkalert" value="0" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" >
		 	<!-- <audio src="ios_notification.mp3" id="my_audio" ></audio> -->
            
			<script>
				$( document ).ready(function() {   
					  checkpayment();    
				 }); 
				 
				function checkpayment() { 
					 var check =	document.getElementById("checkalert").value; 
										
					 var int1 = 0;
					 if(check == ""){
											
					 }else{
						 int1 = parseFloat(check);
					 }
								
					 $.ajax({
					 type: "GET",
					 url: "get_tabletotalalert.php",
					 success: function(result) {  
						 
						 
						   document.getElementById("checkalert").value = parseFloat(result);  
						   document.getElementById("countclickdata").innerHTML = ""+result;  
						 
						 
						   load_unseen_notification(); 
						  
						 }
					 });
					
					
				 }
				
				function load_unseen_notification() { 
				$.ajax({
					type: "GET",
					url: "load_alert.php?major=",
					success: function(result) {
					$('#showbillalldata').html(result);
					}
				});
				}
				
			     setInterval(function(){  
				    checkpayment();    
			     }, 1500);
			</script>
  			
       