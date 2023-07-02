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
                <h3 class="font-weight-normal text-default"> ตะกร้าสินค้า    </h3>
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
               
               
               
               
              	<?php
							$i = 1;
							$totalall1 = 0;
							$totalall2 = 0;
								$sql = "SELECT * FROM member_order where member = '".$load_customer."' and bill_no2 = '' order by pk desc  "; 
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{ 
									$price = $objResult["price"];
									$eattype = $objResult["eattype"];

									$toppingdata = "";
									$nametop1 = "";
									$nametop2 = "";
									$nametop3 = ""; 
									
									
									
									$countall = 0;
									$sql2 = "SELECT * FROM member_order where member = '".$load_customer."' and bill_no2 = '' ";
									$query2 = mysqli_query($objCon,$sql2); 
									while($objResult2 = mysqli_fetch_array($query2))
									{ 
										$countall++;; 
									}
									
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
               
                <div class="media mb-4 w-100">
                    <div class="avatar avatar-60 mr-3 has-background rounded"> 
                        <a class="background">
                            <?php if(empty($img)){ ?>
                                    <img src="img/a1.jpg" alt="">
                                   
                                   <?php }else{ ?>
                                   
                                    <img src="../img/<?php echo $img; ?>" alt="">
                                   <?php } ?> 
                        </a>
                    </div>
                    <div class="media-body"> 
                        <p class="mb-1"><font color="#000" style="font-size: 15px;">  <?php echo $i.". ".$namepro; ?> </font></p> 
                        <p>  
                        <font color="#000" style="font-size: 15px;">  
                        <?php echo $eattype." ".number_format(0+$price); ?> 
                  	    </font>  
                        <br> 
                        <span class="text-secondary small"> 
                        <font color="#000" style="font-size: 15px;">  
							 <?php echo $nametop1." ".$nametop2." ".$nametop3; ?>
                  	    </font>
                   	    </span>
                   	    </p>
                    </div>
                    <div class="align-self-center">
                        <div class="input-group cart-count">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="button"  onClick="Deltotal<?php echo $i; ?>()"  >-</button>
                            </div>
                            <input type="text" class="form-control" id="totaldata<?php echo $i; ?>" placeholder="" value="<?php echo $objResult["total"]; ?>"  onKeyUp="IsNumeric<?php echo $i; ?>()" onKeyDown="IsNumeric<?php echo $i; ?>()"  onKeyPress="IsNumeric<?php echo $i; ?>()"  >
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"  onClick="Addtotal<?php echo $i; ?>()" >+</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                 <input type="hidden" id="data<?php echo $i; ?>" value="<?php echo $objResult["pk"]; ?>"   > 
                 <input type="hidden" id="menuid<?php echo $i; ?>" value="<?php echo $objResult["menu"]; ?>"   > 
                                         
                  <script>
					function Addtotal<?php echo $i; ?>() { 
					   var gettotal =	document.getElementById("totaldata<?php echo $i; ?>").value;
					 
					   if(gettotal == ""){
						   
					   }else{
						   var showtot1 =  parseInt(gettotal) + 1;
						   document.getElementById("totaldata<?php echo $i; ?>").value = showtot1;
						   IsNumeric<?php echo $i; ?>();
					   }
					}
					function Deltotal<?php echo $i; ?>() { 
					   var gettotal =	document.getElementById("totaldata<?php echo $i; ?>").value;
					 
					   if(gettotal == ""){
						   
					   }else{
						   var showtot1 =  parseInt(gettotal) - 1;
						   
						   if(showtot1 < 1){
							   
						   }else{
							 document.getElementById("totaldata<?php echo $i; ?>").value = showtot1;
							 IsNumeric<?php echo $i; ?>();
						   }
						   
					   }
					}
					</script>
               
               
               
                  <script language="javascript">
					function IsNumeric<?php echo $i; ?>()
					{
						var int1 = document.getElementById("totaldata<?php echo $i; ?>").value; 
						var getdatasave = document.getElementById("data<?php echo $i; ?>").value;
						var menuid = document.getElementById("menuid<?php echo $i; ?>").value;    
						 
						var jsonString = "{\"id\":"+getdatasave+",\"total\":"+int1+",\"menuid\":"+menuid+"}";
												
						//alert(" DFDF : " + jsonString);	  
						$.ajax({
							type: "POST",
							url: "save_total_update.php?id="+getdatasave+"&total="+int1+"&menuid="+menuid,
							contentType: 'application/json',
							data: jsonString,
							success: function(result) {   
								
								
								
								var check_number = result.ans;
								//alert(check_number);
								if(check_number == 0){


								}else{  
									alert(' จำนวนสินค้าคงเหลือไม่พอ ');	 
									 location.reload();
								}
								
						}
						});
								
							
						var n1 = parseInt(int1);
						var show=document.getElementById('all<?php echo $i; ?>');
						show.value = (<?php echo $price; ?> * n1);  
						var show=document.getElementById('alltotal<?php echo $i; ?>');
						show.value = (n1);  
												
						var total =  0;
						var total2 =  0;
						var end = <?php echo $countall; ?>;
						for (i2 = 1; i2 <= end; i2++) {
													
							var showallsum = document.getElementById('all'+i2).value;  
							total += Number(showallsum);  
													 
							var showallsum = document.getElementById('alltotal'+i2).value;  
							total2 += Number(showallsum);  
						}
												 
						
						var show1=document.getElementById('sum'); 
						show1.innerHTML = number_format(total);
										 
						var show1=document.getElementById('sumtotal'); 
						show1.innerHTML = number_format(total2);
					}
										
					function number_format (number, decimals, dec_point, thousands_sep) {
												// Strip all characters but numerical ones.
												number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
												var n = !isFinite(+number) ? 0 : +number,
													prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
													sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
													dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
													s = '',
													toFixedFix = function (n, prec) {
														var k = Math.pow(10, prec);
														return '' + Math.round(n * k) / k;
													};
												// Fix for IE parseFloat(0.55).toFixed(0) = 0;
												s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
												if (s[0].length > 3) {
													s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
												}
												if ((s[1] || '').length < prec) {
													s[1] = s[1] || '';
													s[1] += new Array(prec - s[1].length + 1).join('0');
												}
												return s.join(dec);
											}
					</script>
               
                    <input type="hidden" name="all<?php echo $i; ?>"  id="all<?php echo $i; ?>"  placeholder=" สุทธิ "  value="<?php echo  ($price * ($objResult["total"]));?>"  class="form-control" style=" width: 100%; text-align: center; " readonly > 
                    <input type="hidden" name="alltotal<?php echo $i; ?>"  id="alltotal<?php echo $i; ?>"  placeholder=" สุทธิ "  value="<?php echo  ($objResult["total"]);?>"  class="form-control" style=" width: 100%; text-align: center; " readonly > 
                <?php $i++;  
					$totalall1 += $price * ($objResult["total"]);		
					$totalall2 +=  ($objResult["total"]);		
								
				} ?> 
				
            </div>
             
            
            <div class="container mb-4">
                <div class="row my-3 h6 font-weight-normal">
                    <div class="col"> ยอดรวม </div>
                    <div class="col text-right text-mute">
						<font color="#CF6404" style="font-size: 15px;" id="sum"> <?php echo number_format(0+$totalall1); ?> </font>   
						<font color="#CF6404" style="font-size: 15px;">  บาท </font>   
               		</div>
                </div>
                <div class="row my-3 h6 font-weight-normal">
                    <div class="col"> บิลรายการนี้ </div>
                    <div class="col text-right text-mute">
						<font color="#000" style="font-size: 15px;" id="sumtotal" >   <?php echo number_format(0+$totalall2); ?> </font>    
						<font color="#000" style="font-size: 15px;">  รายการ </font>   
               		</div>
                </div>
                <hr> 
            </div>
            <div class="container">
                <a href="save_confrim.php?table=<?php echo $_GET["table"]; ?>" class="btn btn-default btn-block rounded"> ยืนยันสั่งรายการอาหาร </a>
            </div>
            
            
            
        </div>
    </main>
 




<?php
include('footer.php');
?>