 <?php 
 include("../database.php");

	
	$load_closebill = "";
	$sql = "SELECT * FROM member_table Where  tablein = '". $_GET["table"] ."' order by pk desc limit 1 ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
 	 
		$load_closebill = $objResult["closebill"];  

	} 

	if(($load_closebill == "หมดเวลา")){
		//echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		echo("<script>window.location = '../index_member.php';</script>");
	} 
	if(($load_closebill == "เก็บเงิน")){
		//echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		echo("<script>window.location = '../index_member.php';</script>");
	} 
	if(($load_closebill == "เช็คบิลแล้ว")){
		//echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		echo("<script>window.location = '../index_member.php';</script>");
	} 
	if(($load_closebill == "")){
		//echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		echo("<script>window.location = '../index_member.php';</script>");
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


<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title> ร้านก๋วยเตี๋ยวเรือคุณหมื่น สูตรโบราณ </title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="img/favicon180.png" sizes="180x180">
    <link rel="icon" href="logo.png" sizes="32x32" type="image/png">
    <link rel="icon" href="logo.png" sizes="16x16" type="image/png">

    <!-- Material icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- swiper CSS -->
    <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" id="style">
</head>

<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="shop">
    <!-- screen loader -->
    <div class="container-fluid h-100 loader-display">
        <div class="row h-100">
            <div class="align-self-center col">
                <div class="logo-loading">
                    <div class="icon icon-100 mb-4 rounded-circle">
                        <img src="img/favicon144.png" alt="" class="w-100">
                    </div>
                    <h4 class="text-default">  ก๋วยเตี๋ยวเรือ คุณหมื่น  </h4>
                    <p class="text-secondary"> ก๋วยเตี๋ยวเรือ คุณหมื่น </p>
                    <div class="loader-ellipsis">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- menu main -->
    <div class="main-menu">
        <div class="row mb-4 no-gutters">
            <div class="col-auto"><button class="btn btn-link btn-40 btn-close text-white"><span class="material-icons">chevron_left</span></button></div>
            <div class="col-auto">
                <div class="avatar avatar-40 rounded-circle position-relative">
                    <figure class="background">
                        <img src="logo.png" alt="">
                    </figure>
                </div>
            </div>
            <div class="col pl-3 text-left align-self-center">
                <h6 class="mb-1"> ชื่อลูกค้า </h6>
                <p class="small text-default-secondary"> หมายเลขโต๊ะ </p>
            </div>
        </div>
        <div class="menu-container"> 

            <ul class="nav nav-pills flex-column ">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?table=<?php echo $_GET["table"]; ?>">
                        <div>
                            <span class="material-icons icon">account_balance</span>
                            หนักแรก
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="history.php?table=<?php echo $_GET["table"]; ?>">
                        <div>
                            <span class="material-icons icon">insert_chart</span>
                            ประวัติการสั่งอาหาร
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li> 
            </ul>
            <div class="text-center">
                <a href="call.php" class="btn btn-outline-danger text-white rounded my-3 mx-auto"> เรียกเช็คบิล </a>
            </div>
        </div>

    </div>
    <div class="backdrop"></div>