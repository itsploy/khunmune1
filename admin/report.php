<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
				 	 
	
	if(empty($_GET["datestart"])){
		$loaddate = date('d/m/Y'); 
		
		$cut = explode("/",$loaddate);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$loaddate_Chk = date("Y-m-d", strtotime($date_income)); 
	}else{  
		$cut = explode("/",$_GET["datestart"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$loaddate = date("d/m/Y", strtotime($date_income)); 
		$loaddate_Chk = date("Y-m-d", strtotime($date_income)); 
	}
 
	if(empty($_GET["datestart2"])){
		$loaddate2 = date('d/m/Y'); 
		
		$cut = explode("/",$loaddate2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$loaddate_Chk2 = date("Y-m-d", strtotime($date_income)); 
			
	}else{  
		$cut = explode("/",$_GET["datestart2"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$loaddate2 = date("d/m/Y", strtotime($date_income)); 
		$loaddate_Chk2 = date("Y-m-d", strtotime($date_income)); 
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
                     <font size="4px" color="#000000">  สรุปยอดรายงานขาย </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                       <link href='calenthai/css/jquery-ui-1.8.10.custom.css' rel='stylesheet' type='text/css'/>

						<script type="text/javascript" src="calenthai/js/jquery-1.8.3.min.js"></script>
						<script type="text/javascript" src="calenthai/js/jquery.datepick.js"></script>

						<script type="text/javascript"> 
											$(document).ready(function() {
												var d = new Date();
												d.setDate(d.getDate());
												var toDay = d.getDate() + '/' + (d.getMonth() + 1) + '/' + (d.getFullYear()); 

												$(".current").datepicker({    
												changeMonth: true, 
												changeYear: true, 
												dateFormat: 'dd/mm/yy', 
												isBuddhist: false, 
												defaultDate: toDay, 
												dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
												yearRange: "+0:+5",
													  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
													  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
													  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
													});
											}); 
											</script>
                        
                         
                     
                     	<?php
								$colorbtns1s = " background-color: #CF6404; border-radius: 5px; width: 100px; height: 30px; border-color: #CF6404; margin-top: 15px; ";
							 
								$txtcolor1 = "#000"; 
								$txtcolor2 = "#FFF"; 
 
						?> 
                        <div class="col-lg-12" align="left"   >  
						    
 						  <div class="col-lg-2" style="border: 0px solid #CF6404; margin-top: 10px; margin-bottom: 5px;  " >
							  <a href="report.php">  
 						  <div class="col-lg-12" style="border: 1px solid #CF6404; margin-top: 10px; margin-bottom: 5px; background-color: #CF6404; border-radius: 5px;  " > 
							  <div align="center" style="margin-top: 25px; margin-bottom: 25px;  "> 
								<font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style="font-size: 14px; " >     สรุปรายงานยอดขาย <br> วัน/เดือน/ปี    </font>  
							  </div>  
						  </div>
							  </a> 
						  </div>
          
 						  <div class="col-lg-2" style="border: 0px solid #CF6404; margin-top: 10px; margin-bottom: 5px;  " >
							  <a href="report2.php">
 						  <div class="col-lg-12" style="border: 1px solid #CF6404; margin-top: 10px; margin-bottom: 5px; background-color: #FFF; border-radius: 5px;   " >
							    
							  <div align="center" style="margin-top: 35px; margin-bottom: 35px;  "> 
								<font color="<?php echo $txtcolor1; ?>" size="3px" class="serif1" style="font-size: 14px; " >     <div style="margin-top: 25px; "> ดูข้อมูลเเสดงผลกราฟ </div>    </font>  
							  </div>  
							  
						  </div>
							  </a> 
						  </div>
           
						</div>  
                 	
                 	
                 	
                         	<div class="col-lg-12" align="left"   > 
                         		<hr>	
							</div>
               	
               	
               	 		 <div   class="col-lg-5"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  เลือกวันที่ค้นหา    </font>

										<form action="report.php" method="get" > 
									
									
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px;   "    id="datestart" name="datestart" value="<?php echo $loaddate; ?>"  readonly    autocomplete="off"  >
										  
										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<i class="fa fa-search"></i>
										  </button>
										</span>
										</div>
										

										</td> 
										
										<td width="5%">&nbsp;  </td>
										  
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  ถึงวันที่    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px;   "    id="datestart2" name="datestart2" value="<?php echo $loaddate2; ?>"  readonly    autocomplete="off"  >
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<i class="fa fa-search"></i>
										  </button>
										</span>
										</div>
										</form> 

										</td>  
									</tr>
								</table>  
						</div> 
                         
                  		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
                         <font size="3px" color="#000000">  สรุปรายงานยอดขาย  
                         ประจำวันที่ <?php echo DateThai($loaddate_Chk)." ".DateThai2($loaddate_Chk); ?> 
                         ถึง <?php echo DateThai($loaddate_Chk2)." ".DateThai2($loaddate_Chk2); ?> 
                         เวลาอัพเดทล่าสุด: <?php echo date('H:i'); ?> น 
                         </font>   
						 </div>
               	
               	
                	
                  			<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    > 
										
										 
								<tbody>
									<?php 
										$i = 1;
									    $bg = "#F8FAFD"; 
										 
										
										
										$totalsum_all = 0;
										$get_start = date ("Y-m-d", strtotime(  $loaddate_Chk ));	
										$get_end = date ("Y-m-d", strtotime( $loaddate_Chk2 ));		
										$caldataloop = DateDiff($get_start,$get_end); 
									 
										for($startday = 0; $startday <= $caldataloop; $startday++){
											$newday = date ("d-m-Y", strtotime("+".$startday." day", strtotime($loaddate_Chk))); 
											 
												if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
												} 
											
												
												//// ยอดขายก๋วยเตี๋ยว 
												$totalsum1 = 0;
												$sql = "SELECT * FROM member_order
												where create_date = '".$newday."' 
												and typedata = 'ก๋วยเตี๋ยว'
												and bill_no != ''  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 	
													$totalsum1 += $objResult["total"] * $objResult["price"];  	 						
												}
												/// ยอดขายอาหารจานเดียว
												$totalsum2 = 0;
												$sql = "SELECT * FROM member_order
												where create_date = '".$newday."' 
												and typedata = 'จานเดียว'
												and bill_no != ''  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 	
													$totalsum2 += $objResult["total"] * $objResult["price"];  	 						
												}
												/// ยอดขายเครื่องดื่ม
												$totalsum3 = 0;
												$sql = "SELECT * FROM member_order
												where create_date = '".$newday."' 
												and typedata = 'เครื่องดื่ม'
												and bill_no != ''  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 	
													$totalsum3 += $objResult["total"] * $objResult["price"];  	 						
												}
											
											
											$totalsum_all +=  $totalsum1 + $totalsum2 + $totalsum3;
										?> 
										<tr style="background-color: <?php echo $bg; ?>; ">  
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> <?php echo DateThai($newday). " " .DateThai2($newday) ; ?> </font></div></td> 
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> <?php echo number_format(0+$totalsum1); ?>  </font></div></td> 
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> <?php echo number_format(0+$totalsum2); ?>  </font></div></td>  
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> <?php echo number_format(0+$totalsum3); ?>  </font></div></td>     
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> <?php echo number_format(0+$totalsum1 + $totalsum2 + $totalsum3); ?>   </font></div></td>     
										</tr> 	   
										<?php  
										$i++; 
										}
										?>   
									</tbody>
  
								
								<thead> 
											<tr>
												<th width="5%" bgcolor="#FFF" colspan="4" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   &nbsp;    </font></div></th>    
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   <?php echo number_format(0+$totalsum_all); ?>   </font></div></th>     
											 </tr>
											 <tr>
												<th width="5%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    วัน เดือน ปี    </font></div></th>    
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ยอดขายก๋วยเตี๋ยว   </font></div></th>    
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ยอดขายอาหารจานเดียว   </font></div></th>    
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ยอดขายเครื่องดื่ม   </font></div></th>     
												 
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF; border-top: 1px solid #FFF;"><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดรวมสุทธิ   </font></div></th>  
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