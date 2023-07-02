<?php
include('header.php');

	$sql = "SELECT * FROM member_table Where  tablein = '". $_GET["table"] ."' and ( closebill = '' or closebill = 'กำลังทาน' ) ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$load_name = $objResult["name"];
		$load_telphone = $objResult["telphone"];
		$load_timein = $objResult["timein"];  
		$load_tablein = $objResult["tablein"];  
		$load_customer = $objResult["pk"];   
		
		
		
		$strSQL = "Update member_table Set   closebill = 'กำลังทาน'  " ;
		$strSQL .=" WHERE pk = '". $objResult["pk"]."' ";  
		$objQuery = mysqli_query($objCon, $strSQL); 
		
	} 

	$sql = "SELECT * FROM member_table Where  tablein = '". $_GET["table"] ."' order by pk desc limit 1 ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
 	 
		$load_closebill = $objResult["closebill"];  

	} 

	$sql = "SELECT * FROM table_data Where  pk = '". $load_tablein ."' order by pk desc limit 1 ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
 	 
		$nametable = $objResult["name"];  

	} 

	 
?>


    <!-- Begin page content -->
    <main class="flex-shrink-0 main has-footer">
        <!-- Fixed navbar -->
        <header class="header">
            <div class="row">
                <div class="col-auto px-0">
                    <button class="menu-btn btn btn-40 btn-link" type="button">
                        <span class="material-icons">menu</span>
                    </button>
                </div>
                <div class="text-left col align-self-center">
                    <a class="navbar-brand" href="#">
                        <h5 class="mb-0"> ก๋วยเตี๋ยวเรือ คุณหมื่น </h5>
                    </a>
                </div>
                <div class="ml-auto col-auto pl-0">
                    <button type="button" class="btn btn-link btn-40 colorsettings">
                        <span class="material-icons">color_lens</span>
                    </button>

                     
                    <a href="profile.html" class="avatar avatar-30 shadow-sm rounded-circle ml-2">
                        <figure class="m-0 background">
                            <img src="logo.png" alt="">
                        </figure>
                    </a>
                </div>
            </div>
        </header>

        <!-- page content start -->
 
        <div class="main-container">
           
            <div class="container mb-4">
                <!-- Swiper -->
                <div class="swiper-container offerslidetab1">
                    <div class="swiper-wrapper">
                       
                       <?php for($loop = 0; $loop <= 2; $loop++){  ?>
                        <div class="swiper-slide">
                            <div class="card overflow-hidden">
                                <div class="background opacity-30">
                                    <img src="img/image8.jpg" alt="">
                                </div>
                                <div class="card-body text-white">
                                    <h3 class="font-weight-normal"> ก๋วยเตี๋ยวเรือ คุณหมื่น </h3>
                                    <p class="text-mute"> ยินดีต้อนรับ <?php echo $load_name; ?>  </p>
                                    <div class="text-right">
                                        <a href="" class="btn btn-sm btn-default rounded"> <?php echo $nametable; ?> </a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <?php } ?>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination white-pagination text-left pl-2 mb-3"></div>
                </div>
            </div>

            <div class="container mb-4">
                <!-- Swiper -->
                <div class="swiper-container categoriestab1 text-center">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <a href="index.php?table=<?php echo $_GET["table"];?>&eat=ก๋วยเตี๋ยว" > 
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 mb-1 rounded">
                                        <div class="background">
                                            <img src="img/a1.jpg" alt="">
                                        </div>
                                    </div>
                                    <p class="text-secondary"><small> ก๋วยเตี๋ยว  </small></p>
                                </div>
                            </div>
                             </a>
                        </div>
                        <div class="swiper-slide">
                           <a href="index.php?table=<?php echo $_GET["table"];?>&eat=อาหารจานเดียว" > 
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 mb-1 rounded">
                                        <div class="background">
                                            <img src="img/a2.jpg" alt="">
                                        </div>
                                    </div>
                                    <p class="text-secondary"><small> อาหารจานเดียว </small></p>
                                </div>
                            </div>
                             </a>
                        </div>
                        <div class="swiper-slide">
                           <a href="index.php?table=<?php echo $_GET["table"];?>&eat=เครื่องดื่ม" > 
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="avatar avatar-60 mb-1 rounded">
                                        <div class="background">
                                            <img src="img/a3.jpg" alt="">
                                        </div>
                                    </div>
                                    <p class="text-secondary"><small> เครื่องดื่ม </small></p>
                                </div>
                            </div>
                             </a>
                        </div> 
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination white-pagination text-left mb-3"></div>
                </div>
            </div>


            <div class="container-fluid bg-default-light text-center py-4 mb-4">
                <h3 class="font-weight-normal text-default"> ยินดีต้อนรับ     </h3>
                <font color="#000" style="font-size: 14px;"> <?php echo date('d-m-Y'); ?>    <font id="timeshow">  00.00 </font> น.  </font> 
            </div>
 
			<script>
				setInterval(() => {
					$.get( "date.php", function( data ) {
						$( "#timeshow" ).html( data );
					});        
				}, 1000);
			</script>
          
          
          	<style>
			.grid-container2 {
			display: grid;
			grid-template-columns: 65% 35% ;  
			}
			.grid-container1 {
			display: grid;
			grid-template-columns: 100% ;  
			}
			.grid-item {  
			padding-right: 10px; 
			}
			</style>
            <div class="col-md-12">
              <?php
				$sql = "SELECT * FROM product Where  pk = '".$_GET["pkeat"]."' order by pk desc  ";  
				$query = mysqli_query($objCon,$sql); 
				while($objResult = mysqli_fetch_array($query))
				{   
					$name = $objResult["name"];  
					$price1 = $objResult["price1"];
					$price2 = $objResult["price2"];  
					$img = $objResult["img"];       
					$bill_no = $objResult["bill_no"];       
					$typedata = $objResult["typedata"];       
  
				?>
            
			 <form role="form" name="frmMain" method="post" action="save_eat.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
             <input type="hidden" id="table" name="table" value="<?php echo $_GET["table"]; ?>" >
             <input type="hidden" id="pkeat" name="pkeat" value="<?php echo $_GET["pkeat"]; ?>" >
             <input type="hidden" id="typedata" name="typedata" value="<?php echo $typedata; ?>" >
                 		 
            
             <div class="grid-container2"> 
						
			 <div class="grid-item">  
                 		  
			 <font color="#000" style="font-size: 16px;">    
			 
			 <?php echo $objResult["name"]; ?> 
			   
			 <label class="container2" style="margin-top: 5px;"  > 
			 <label style="padding-top: -55px;">  <font color="#000" style="font-size: 14px;">    ธรรมดา  <?php echo number_format(0+$objResult["price1"]); ?> บาท    </font>   </label>
			  <input type="radio" name="eattype" id="eattype" value="ธรรมดา"  required   >
			  <span class="checkmark"></span>
			 </label>  
			  
			 <label class="container2" style="margin-top: -15px;"  > 
			 <label >  <font color="#000" style="font-size: 14px;">    พิเศษ  <?php echo number_format(0+$objResult["price2"]); ?> บาท    </font>   </label>
			  <input type="radio" name="eattype" id="eattype" value="พิเศษ"    >
			  <span class="checkmark"></span>
			 </label>  
			  
			  
			 </font>   
			 </div> 	
      		 
      		 
			 <div class="grid-item">
			  <?php if(empty($objResult["img"])){ ?>
                 <img src="img/a1.jpg" alt=""  style="width: 100%; border-radius: 10px;">
                                   
               <?php }else{ ?>
                                   
                  <img src="../img/<?php echo $objResult["img"]; ?>" alt=""  style="width: 100%; border-radius: 10px;">
               <?php } ?> 
				 
			 </div>
       		 </div>  
             
             
             <div class="grid-container1">
			 <div class="grid-item">
            
			 <div style="margin-top: -5px;"  > 
			 <font color="#000" style="font-size: 14px;">   เลือกเส้นก๋วยเตี๋ยว  </font>  
			 <select  id border: 1px solid #CBCBCB; ="topping1" name="topping1"    style=" width: 100%; border-radius: 5px; font-size: 14px; height: 28px; padding-left: 3px;  border: 1px solid #CBCBCB;"  >
				<option value=""> เลือกเส้นก๋วยเตี๋ยว  </option> 
				<?php 
				$sql = "SELECT * FROM topping_bamee1 where pk = '".$topping1."' order by pk asc  "; 
				$query = mysqli_query($objCon,$sql);
				while($objResult = mysqli_fetch_array($query))
				{ 
				?>
				<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
				<?php  
				}
				?>   
				<?php 
					$sql = "SELECT * FROM topping_bamee1 where pk != '".$topping1."' order by pk asc  "; 
					$query = mysqli_query($objCon,$sql);
					while($objResult = mysqli_fetch_array($query))
					{ 
					?>
					<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
				<?php  
					}
				?>   
			 </select>
			 </div> 
							  
			 <div style="margin-top: 5px;"  > 
			 <font color="#000" style="font-size: 14px;">   เครื่องเคียง (topping)  </font>  
			 <select  id="topping2" name="topping2"    style=" width: 100%; border-radius: 5px; font-size: 14px; height: 28px; padding-left: 3px; border: 1px solid #CBCBCB; "  >
				<option value=""> เลือกเครื่องเคียง (topping)  </option> 
				<?php 
				$sql = "SELECT * FROM topping_bamee2 where pk = '".$topping2."' order by pk asc  "; 
				$query = mysqli_query($objCon,$sql);
				while($objResult = mysqli_fetch_array($query))
				{ 
				?>
				<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
				<?php  
				}
				?>   
				<?php 
					$sql = "SELECT * FROM topping_bamee2 where pk != '".$topping2."' order by pk asc  "; 
					$query = mysqli_query($objCon,$sql);
					while($objResult = mysqli_fetch_array($query))
					{ 
					?>
					<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
				<?php  
					}
				?>   
			 </select>
			 </div> 
			 
			  
			 <div style="margin-top: 5px;"  > 
			 <font color="#000" style="font-size: 14px;">  หมายเหตุ  </font>  
			  <textarea type="text" id="note" name="note"  autocomplete="off" rows="2"     style=" width: 100%; border-radius: 5px; font-size: 14px;  padding-left: 10px;  border: 1px solid #CBCBCB;  "   ></textarea>
			 </div> 
            
			 </div>
			 </div>
            
            
             <div class="grid-container1">
			 <div class="grid-item">
			  
				<button type="submit" class="btn btn-sm btn-primary" style="background-color: #CF6404; border-radius: 15px; width: 100%; height: 35px; border-color: #CF6404; margin-top: 35px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >  เลือกรายการอาหาร   </font> </button> 
				 
			 </div>
			 </div>
             
			 </form>  
             <?php } ?>
             
            </div>
           
        </div>
    </main>
 


	<style>
/* The container */
.container2 {
  display: block;
  position: relative;
  padding-left: 20px; 
  margin-bottom: 12px;  
  cursor: pointer;   
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container2 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 15px;
  width: 15px; 
	margin-top: 3px;
  background-color: #FFFFFFF;
	border-radius: 5px;
	border: 1px solid #CF6404;
}

/* On mouse-over, add a grey background color */
.container2:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container2 input:checked ~ .checkmark {
  background-color: #004E89;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container2 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container2 .checkmark:after {
  left: 4px;
  top: 1px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>


<?php
include('footer.php');
?>