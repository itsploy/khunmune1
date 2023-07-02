<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	$sql = "SELECT * FROM table_data Where  pk = '". $_GET["table"] ."' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$name = $objResult["name"];   
	}  
				
	$sql = "SELECT * FROM member_table Where  tablein = '". $_GET["table"] ."' and ( closebill = '' or closebill = 'กำลังทาน' or closebill = 'เก็บเงิน'  ) ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$load_name = $objResult["name"];
		$load_telphone = $objResult["telphone"];
		$load_timein = $objResult["timein"];  
		$load_tablein = $objResult["tablein"];  
		$load_customer = $objResult["pk"];   
		 
	}  
 
?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
            
            <div class="clearfix"></div>
            <div class="row" >
              <div class=" col-lg-12 "  > 
                <div class="x_panel"  style="background-color: #FFFFFF;  border-radius: 10px; " > 
                 
                  <div class=" col-lg-12 " style="background-color: #FFF; height: 38px; " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 6px;" > 
                     <font size="4px" color="#000000">  ตรวจสอบรายการสั่งอาหารเเต่ละโต๊ะ </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      	<?php if(empty($_GET["page"])){ ?>
                     
                      	     <div   class="col-lg-9"  align="left"> 
						  	  <font color="#CF6404" size="3px" class="serif" style="font-size: 18px; ">  โต๊ะหมายเลข <?php echo $name; ?>   </font> 
						  	  <br>
						  	  <font color="black" size="3px" class="serif"  style="font-size: 15px; " > คุณ : <?php echo $load_name; ?> 
						  	  <br> 
      		                 
      		                   ประจำวันที่ <?php echo DateThai(date('d-m-Y'))." ".DateThai2(date('d-m-Y')) ; ?>  </font> 
      		                    
       		                 </div>
       		                 
                              <?php
								$colorbtns1s = " background-color: #FF0000; border-radius: 5px;  height: 50px; border-color: #FF0000; margin-top: 15px; "; 

								$txtcolor1 = "#FFF"; 
								$txtcolor2 = "#FFF"; 
  				 
								?>
                   			  <div class="col-lg-3"  align="right" style="margin-top: 5px;"   >  
                                <a href="save_stauts_back.php?table=<?php echo $_GET["table"]; ?>"    >
								<button type="button" class="btn btn-sm btn-primary" style=" <?php echo $colorbtns1s; ?> " > <font color="<?php echo $txtcolor1; ?>" size="3px" class="serif1" >   เช็คบิล โต๊ะหมายเลข <?php echo $name; ?>    </font> </button> </a> 
							  </div>
       		                 
       		                 
                     
                 			<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >   
										<tbody>
									<?php 
										$i = 1;
										$sumall = 0;
										 
										
										$bg = "#F8FAFD"; 
										$sql = "SELECT * FROM member_order where bill_no2 != '' 
										and bill_no = '' 
										and tablein = '".$_GET["table"]."' 
										order by pk asc  ";   
										$query = mysqli_query($con,$sql); 
										while($objResult = mysqli_fetch_array($query))
										{ 
									 
												if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
												}  
										 
											
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
												
										?> 
										<tr style="background-color: <?php echo $bg; ?>; ">  
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> <?php echo $i; ?> </font></div></td> 
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> <?php echo $objResult["create_time"]; ?>  </font></div></td> 
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> <?php echo $namepro; ?>  </font></div></td>  
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> <?php echo $nametop2; ?>  </font></div></td> 
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> <?php echo $nametop3; ?>  </font></div></td>     
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> <?php echo number_format(0+$objResult["total"]); ?>  </font></div></td>      
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> <?php echo  $objResult["note"] ; ?>  </font></div></td>   
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> <?php echo number_format(0+$objResult["total"]*$objResult["price"]); ?>  </font></div></td>  
										 
										 
										 
										 <td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> 
										<?php if($objResult["status"] == "อยู่ในระหว่างทำ" ){ ?> 
										<font size="2px" class="serif2" color = "#FF0000" > อยู่ในระหว่างทำ </font>   

										<?php }else if($objResult["status"] == "ทำการเสริฟแล้ว"){  ?>
										<font size="2px" class="serif2" color = "#006400" > ทำการเสริฟแล้ว </font> 
										
										<?php } ?>
											 
										</font></div></td>    
										
										
										
										</tr> 	   
										<?php  
										$i++; 
											$sumall += $objResult["total"]*$objResult["price"];
										}
										?>   
										
											 <tr>
												<th width="2%" bgcolor="#FFF" colspan="9" height="35px;" style=" border: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; "  ><div align="center"  > 
												<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    ยอดชำระเงินทั้งหมด <?php echo number_format(0+$sumall); ?>  </font></div></th>    
											 </tr>
									</tbody> 
										<thead> 
											 <tr>
												<th width="2%" bgcolor="#FFF" colspan="7" height="35px;" style="border: 1px solid #FFF; border-right: 1px solid #FFF; border-bottom: 1px solid #FFF; "  ><div align="center"  > 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    &nbsp;    </font></div></th>
												
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   <?php echo number_format(0+$sumall); ?>   </font></div></th>     
												<th width="5%" bgcolor="#FFF" style="border: 0px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  &nbsp;   </font></div></th>  
											 </tr>
											 <tr>
												<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></th>
												
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เวลา   </font></div></th>    
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รายการ   </font></div></th>    
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เส้น   </font></div></th>    
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เครื่องเคียง   </font></div></th>    
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    จำนวน   </font></div></th>    
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    หมายเหตุ   </font></div></th>     
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; border-top: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคา   </font></div></th>  
												
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะ   </font></div></th>  
											 </tr>
										  </thead>  
									 </table>  
								   </div>
						  	</div>
                 	
                 	
                  	 
                    
                     	 <?php } ?>
                      
                      
                      
               	 		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
                          <bR><bR><bR><br>  
                          <bR><bR><bR><br>    
						 </div>
                
                    
                </div>
              </div>
            </div>
            
             
            
        </div>

<?php
include('footer2.php');
?>