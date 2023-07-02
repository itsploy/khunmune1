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
                        <h5 class="mb-0"> ก๋วยเตี๋ยวเรือ คุณหมื่น  </h5>
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
                           <a href="index.php?table=<?php echo $_GET["table"];?>&eat=จานเดียว" > 
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
                <h3 class="font-weight-normal text-default"> ยินดีต้อนรับ    </h3>
                <font color="#000" style="font-size: 14px;"> <?php echo date('d-m-Y'); ?>    <font id="timeshow">  00.00 </font> น.  </font> 
            </div>
 
			<script>
				setInterval(() => {
					$.get( "date.php", function( data ) {
						$( "#timeshow" ).html( data );
					});        
				}, 1000);
			</script>
            

            <div class="container bg-default-light mb-4 py-3">
                <!-- Swiper -->
                <div class="swiper-container categories2tab1 text-center mb-4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <a href="index.php?table=<?php echo $_GET["table"];?>&eat=ก๋วยเตี๋ยว" > 
                            <button class="btn btn-sm btn-default active rounded"> ก๋วยเตี๋ยว </button>
                             </a>
                        </div>
                        <div class="swiper-slide">
                           <a href="index.php?table=<?php echo $_GET["table"];?>&eat=จานเดียว" > 
                            <button class="btn btn-sm btn-default active rounded"> อาหารจานเดียว  </button>
                             </a>
                        </div>
                        <div class="swiper-slide">
                           <a href="index.php?table=<?php echo $_GET["table"];?>&eat=เครื่องดื่ม" > 
                            <button class="btn btn-sm btn-default active rounded"> เครื่องดื่ม  </button>
                             </a>
                        </div> 
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination white-pagination text-left mb-3"></div>
                </div>

                <div class="row">
                    
                 <?php if(empty($_GET["eat"])){ ?>
                   <?php
					$sql = "SELECT * FROM product Where  typedata = 'ก๋วยเตี๋ยว' order by pk desc  ";  
					$query = mysqli_query($objCon,$sql); 
					while($objResult = mysqli_fetch_array($query))
					{   
					?>
                     <div class="col-6 col-md-4 col-lg-3">
                       <a href="view_eat.php?table=<?php echo $_GET["table"];?>&pkeat=<?php echo $objResult["pk"];?>" > 
                        <div class="card border-0 mb-4 overflow-hidden">
                            <div class="card-body h-150 position-relative"> 
                                <div class="bottom-left m-2">
                                    <button class="btn btn-sm btn-default rounded"> <?php echo $objResult["typedata"]; ?> </button>
                                </div>
                                <a href="view_eat.php?table=<?php echo $_GET["table"];?>&pkeat=<?php echo $objResult["pk"];?>" class="background">
                                   <?php if(empty($objResult["img"])){ ?>
                                    <img src="img/a1.jpg" alt="">
                                   
                                   <?php }else{ ?>
                                   
                                    <img src="../img/<?php echo $objResult["img"]; ?>" alt="">
                                   <?php } ?> 
                                </a>
                            </div>
                            <div class="card-body ">
                                <p class="mb-0"><small class="text-secondary"> AC-<?php echo $objResult["pk"]; ?> </small></p> 
                                <font color="#000"  style="font-size: 14px;" > <?php echo $objResult["name"]; ?> </font> 
                                <h5 class="mb-0"> <font color="#000" style="font-size: 13px;"> ธรรมดา  <?php echo number_format(0+$objResult["price1"]); ?> บาท  </font> </h5>
                                <h5 class="mb-0"> <font color="#000" style="font-size: 13px;"> พิเศษ  <?php echo number_format(0+$objResult["price2"]); ?> บาท </font> </h5>
                            </div>
                        </div>
                      </a>
                    </div> 
                   <?php } ?>
                     
                     
                   <?php
					$sql = "SELECT * FROM product Where  typedata = 'จานเดียว' order by pk desc  ";  
					$query = mysqli_query($objCon,$sql); 
					while($objResult = mysqli_fetch_array($query))
					{   
					?>
                     <div class="col-6 col-md-4 col-lg-3">
                       <a href="view_eatrice.php?table=<?php echo $_GET["table"];?>&pkeat=<?php echo $objResult["pk"];?>" > 
                        <div class="card border-0 mb-4 overflow-hidden">
                            <div class="card-body h-150 position-relative"> 
                                <div class="bottom-left m-2">
                                    <button class="btn btn-sm btn-default rounded"> <?php echo $objResult["typedata"]; ?> </button>
                                </div>
                                <a href="view_eatrice.php?table=<?php echo $_GET["table"];?>&pkeat=<?php echo $objResult["pk"];?>" class="background">
                                   <?php if(empty($objResult["img"])){ ?>
                                    <img src="img/a1.jpg" alt="">
                                   
                                   <?php }else{ ?>
                                   
                                    <img src="../img/<?php echo $objResult["img"]; ?>" alt="">
                                   <?php } ?> 
                                </a>
                            </div>
                            <div class="card-body ">
                                <p class="mb-0"><small class="text-secondary"> AC-<?php echo $objResult["pk"]; ?> </small></p> 
                                <font color="#000"  style="font-size: 14px;" > <?php echo $objResult["name"]; ?> </font> 
                                <h5 class="mb-0"> <font color="#000" style="font-size: 13px;"> ธรรมดา  <?php echo number_format(0+$objResult["price1"]); ?> บาท  </font> </h5>
                                <h5 class="mb-0"> <font color="#000" style="font-size: 13px;"> พิเศษ  <?php echo number_format(0+$objResult["price2"]); ?> บาท </font> </h5>
                            </div>
                        </div>
                      </a>
                    </div> 
                   <?php } ?>
                      
                   <?php
					$sql = "SELECT * FROM drink   order by pk desc  ";  
					$query = mysqli_query($objCon,$sql); 
					while($objResult = mysqli_fetch_array($query))
					{   
					?>
                     <div class="col-6 col-md-4 col-lg-3">
                       <a href="view_eatdrink.php?table=<?php echo $_GET["table"];?>&pkeat=<?php echo $objResult["pk"];?>" > 
                        <div class="card border-0 mb-4 overflow-hidden">
                            <div class="card-body h-150 position-relative"> 
                                <div class="bottom-left m-2"> 
                                    <button class="btn btn-sm btn-default rounded" style="background-color: #CF6404;"> หยิบลงตะกร้า </button> 
                                </div>
                                <a href="view_eatdrink.php?table=<?php echo $_GET["table"];?>&pkeat=<?php echo $objResult["pk"];?>" class="background">
                                   <?php if(empty($objResult["img"])){ ?>
                                    <img src="img/a1.jpg" alt="">
                                   
                                   <?php }else{ ?>
                                   
                                    <img src="../img/<?php echo $objResult["img"]; ?>" alt="">
                                   <?php } ?> 
                                </a>
                            </div>
                            <div class="card-body ">
                                <p class="mb-0"><small class="text-secondary"> D-<?php echo $objResult["pk"]; ?> </small></p> 
                                <font color="#000"  style="font-size: 14px;" > <?php echo $objResult["name"]; ?> </font> 
                                <h5 class="mb-0"> <font color="#000" style="font-size: 13px;">    
                                ราคา
                                <?php echo number_format(0+$objResult["price"]); ?> บาท  </font> </h5> 
                                <h5 class="mb-0"> <font color="#000" style="font-size: 13px;">  &nbsp; </font> </h5> 
                            </div>
                        </div>
                      </a>
                    </div> 
                   <?php } ?>
                  <?php }else if($_GET["eat"] == "ก๋วยเตี๋ยว"){  ?>
                  
                   <?php
					$sql = "SELECT * FROM product Where  typedata = 'ก๋วยเตี๋ยว' order by pk desc  ";  
					$query = mysqli_query($objCon,$sql); 
					while($objResult = mysqli_fetch_array($query))
					{   
					?>
                     <div class="col-6 col-md-4 col-lg-3">
                       <a href="view_eat.php?table=<?php echo $_GET["table"];?>&pkeat=<?php echo $objResult["pk"];?>" > 
                        <div class="card border-0 mb-4 overflow-hidden">
                            <div class="card-body h-150 position-relative"> 
                                <div class="bottom-left m-2">
                                    <button class="btn btn-sm btn-default rounded"> <?php echo $objResult["typedata"]; ?> </button>
                                </div>
                                <a href="view_eat.php?table=<?php echo $_GET["table"];?>&pkeat=<?php echo $objResult["pk"];?>" class="background">
                                   <?php if(empty($objResult["img"])){ ?>
                                    <img src="img/a1.jpg" alt="">
                                   
                                   <?php }else{ ?>
                                   
                                    <img src="../img/<?php echo $objResult["img"]; ?>" alt="">
                                   <?php } ?> 
                                </a>
                            </div>
                            <div class="card-body ">
                                <p class="mb-0"><small class="text-secondary"> AC-<?php echo $objResult["pk"]; ?> </small></p> 
                                <font color="#000"  style="font-size: 14px;" > <?php echo $objResult["name"]; ?> </font> 
                                <h5 class="mb-0"> <font color="#000" style="font-size: 13px;"> ธรรมดา  <?php echo number_format(0+$objResult["price1"]); ?> บาท  </font> </h5>
                                <h5 class="mb-0"> <font color="#000" style="font-size: 13px;"> พิเศษ  <?php echo number_format(0+$objResult["price2"]); ?> บาท </font> </h5>
                            </div>
                        </div>
                      </a>
                    </div> 
                   <?php } ?>
                     
                  <?php }else if($_GET["eat"] == "จานเดียว"){  ?>
                  
                   <?php
					$sql = "SELECT * FROM product Where  typedata = 'จานเดียว' order by pk desc  ";  
					$query = mysqli_query($objCon,$sql); 
					while($objResult = mysqli_fetch_array($query))
					{   
					?>
                     <div class="col-6 col-md-4 col-lg-3">
                       <a href="view_eatrice.php?table=<?php echo $_GET["table"];?>&pkeat=<?php echo $objResult["pk"];?>" > 
                        <div class="card border-0 mb-4 overflow-hidden">
                            <div class="card-body h-150 position-relative"> 
                                <div class="bottom-left m-2">
                                    <button class="btn btn-sm btn-default rounded"> <?php echo $objResult["typedata"]; ?> </button>
                                </div>
                                <a href="view_eatrice.php?table=<?php echo $_GET["table"];?>&pkeat=<?php echo $objResult["pk"];?>" class="background">
                                   <?php if(empty($objResult["img"])){ ?>
                                    <img src="img/a1.jpg" alt="">
                                   
                                   <?php }else{ ?>
                                   
                                    <img src="../img/<?php echo $objResult["img"]; ?>" alt="">
                                   <?php } ?> 
                                </a>
                            </div>
                            <div class="card-body ">
                                <p class="mb-0"><small class="text-secondary"> AC-<?php echo $objResult["pk"]; ?> </small></p> 
                                <font color="#000"  style="font-size: 14px;" > <?php echo $objResult["name"]; ?> </font> 
                                <h5 class="mb-0"> <font color="#000" style="font-size: 13px;"> ธรรมดา  <?php echo number_format(0+$objResult["price1"]); ?> บาท  </font> </h5>
                                <h5 class="mb-0"> <font color="#000" style="font-size: 13px;"> พิเศษ  <?php echo number_format(0+$objResult["price2"]); ?> บาท </font> </h5>
                            </div>
                        </div>
                      </a>
                    </div> 
                   <?php } ?>
                      
                      
                  <?php }else if($_GET["eat"] == "เครื่องดื่ม"){  ?>
                      
                      
                  <?php } ?>
                </div> 
            </div>
            <div class="container mb-4">
                <div class="card border-0 mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto pr-0">
                                <div class="avatar avatar-50 border-0 bg-danger-light rounded-circle text-danger">
                                    <i class="material-icons vm text-template">card_giftcard</i>
                                </div>
                            </div>
                            <div class="col-auto align-self-center">
                               
                                <?php
								$totalbill = 0;
								$sql = "SELECT * FROM member_order Where bill_no = '' and bill_no2 != ''
								and tablein = '".$_GET["table"]."'
								Group By bill_no2 
								order by pk desc  ";  
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{   
									 $totalbill++;
								}
								?>
                               
                                <h6 class="mb-1"> จำนวนบิลทั้งหมด <?php echo $totalbill; ?>  บิล </h6>
                                <p class="small text-secondary">  <font color="#000" style="font-size: 14px;"> <?php echo date('d-m-Y'); ?>    <font id="timeshow2">  00.00 </font> น.  </font>   </p>
                                
								<script>
									setInterval(() => {
										$.get( "date.php", function( data ) {
											$( "#timeshow2" ).html( data );
										});        
									}, 1000);
								</script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              
        </div>
    </main>
 




<?php
include('footer.php');
?>