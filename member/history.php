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
           
           
           
            <div class="container-fluid bg-default-light text-center py-4 mb-4">
                <h3 class="font-weight-normal text-default"> รายการอาหาร    </h3>
                <font color="#000" style="font-size: 14px;"> <?php echo date('d-m-Y'); ?>    <font id="timeshow">  00.00 </font> น.  </font> 
            </div>
 
			<script>
				setInterval(() => {
					$.get( "date.php", function( data ) {
						$( "#timeshow" ).html( data );
					});        
				}, 1000);
			</script>
 
           
           
            <div class="container"> 
               
			<style>
				.grid-containerfull {
				display: grid;
				grid-template-columns: 100%   ;  
				} 
				.grid-item {  
				padding-right: 3px; 
				}
			</style>
               <div class="col-lg-12">
               	 <?php
				    $bg = "#F7F7F7";  
					$total_sum = 0;
				   
					$sql_table = "SELECT * FROM member_order
					where bill_no = ''  
					and   tablein = '".$_GET["table"]."' 
					Group By bill_no2
					order by pk asc   ";     
					$query_table = mysqli_query($con,$sql_table); 
					while($objResult_table = mysqli_fetch_array($query_table))
					{  
								if($bg == "#FFF"){ 
									$bg = "#F7F7F7"; 
								}else{  
									$bg = "#FFF"; 
								}
						 
						$total1 = 0;
						$sql2 = "SELECT * FROM member_order Where  bill_no2 = '". $objResult_table["bill_no2"]."' ";   
						$query2 = mysqli_query($objCon,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{
							$total1 += $objResult2["price"] * $objResult2["total"]; 
						}	
					?> 
               		<div class="col-lg-12"  align="left" style="margin-top: 10px; "  >  
							 <div class="col-lg-12 " style="margin-top: 10px; border: 1px solid #E0E0E0; border-radius: 10px; background-color: <?php echo $bg; ?>;  " >
									<div class="row"  >
									<div class="col-lg-12 ">
									<div class="form-group" style="margin-top: 15px;"  >   
									 <div  style="margin-top: 20px;" >    
									 <font color="black" size="1px"  style="font-size: 14px;"> 
						
										เลขที่ทำรายการ <?php echo $objResult_table["bill_no2"]; ?> <br>
										
										<a data-toggle="modal" data-target="#myEodal1<?php echo $objResult_table["bill_no2"];?>" data-id="" style="cursor: pointer; " >
										<font color="black" size="2px" class="serif2"> รายละเอียด </font> </a> 
										
											<!-- Modal -->
										<div class="modal fade" id="myEodal1<?php echo $objResult_table["bill_no2"]; ?>" role="dialog">
										<div class="modal-dialog"> 
										<!-- Modal content-->
										<div class="modal-content">
												<div class="modal-header">
												<font size="2px" color="black"  class="serif2"> เลขที่บิลรายการ : <?php echo $objResult_table["bill_no2"]; ?> </font> 
												<button type="button" id="closepop<?php echo $objResult_table["bill_no2"]; ?>"  class="close" data-dismiss="modal">&times;</button>
												</div> <br>
												<div class="col-lg-12">  

													<?php   
														$i = 1;
														$totalall = 0;
														$sql = " SELECT * FROM member_order where bill_no2 != '' 
																		and bill_no = '' 
																		and bill_no2 = '". $objResult_table["bill_no2"]."'
																		and tablein = '".$_GET["table"]."' 
																		order by pk asc   "; 
														$query = mysqli_query($con,$sql); 
														while($objResult = mysqli_fetch_array($query))
														{ 

																$price = $objResult["price"];
																$eattype = $objResult["eattype"];

																$toppingdata = "";
																$nametop1 = "";
																$nametop2 = "";
																$nametop3 = ""; 
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
													?>	  
														  <div class="row">    
														  <div class="col-lg-12 " align="left" >
															<div class="form-group">
															<font size="2px" class="serif2">    
															  
															  <div class="media-body"> 
																<p class="mb-1"><font color="#000" style="font-size: 15px;">  
																<?php echo $i.". ".$namepro; ?>  <?php echo $eattype." ".number_format(0+$price); ?>  </font></p> 
																<p>    
																<span class="text-secondary small"> 
																<font color="#FF0000" style="font-size: 15px;">  
																	  <?php echo $nametop1." ".$nametop2." ".$nametop3; ?> 
																</font>
																</span>
																</p>
															</div>
															  
															  
															</font>
														  </div> 
														  </div> 
														  </div>  

														<?php 
															$i++; 
															}
														?>  
													</div>
													</div>
										</div>
										</div> 
									 
									 
									 
										 |   
										
										
										<font color="#CF6404" size="1px"  style="font-size: 14px;">   ยอดเงิน <?php echo number_format(0+$total1); ?> บาท   	</font>  

									</font>  
									 </div>  
									</div>  
									</div> 
									</div> 
						     </div> 
						  </div>
               	<?php $total_sum+= $total1;  } ?>
               	
               	<div class="col-lg-12">
               		<hr>
               	</div>
               	<div class="col-lg-12" align="right"  >
               		<font color="#CF6404" size="1px"  style="font-size: 15px;">   ยอดเงิน <?php echo number_format(0+$total_sum); ?> บาท   	</font>
               	</div>
               	
				<div class="container" style="margin-top: 30px;">
					<a href="save_confrim_call.php?table=<?php echo $_GET["table"]; ?>" class="btn btn-default btn-block rounded" style="background-color: #CF6404; border: 1px solid #CF6404; "> เรียกพนักงานเก็บเงิน </a>
				</div>
              
              
               </div>
               
           
        	</div>
            
            
        </div>
    </main>
 




<?php
include('footer.php');
?>