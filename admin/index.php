<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
		 	 
				 
 
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
                     <font size="4px" color="#000000">  ตรวจสอบรายการสั่งอาหาร </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                     
                     
                     	<?php
								$colorbtns1s = " background-color: #2FBA33; border-radius: 5px; width: 140px; height: 50px; border-color: #2FBA33; margin-top: 15px; ";
							 
								$txtcolor1 = "#FFFFFF"; 
 
						?> 
                        <div class="col-lg-12" align="left"   >  
						<?php  
							$sql2 = "SELECT * FROM table_data where name != '' order by pk asc  ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{     
								
								if($objResult2["status"] == "ไม่ว่าง"){
								$colorbtns1s = " background-color: #FF0000; border-radius: 5px; width: 140px; height: 60px; border-color: #FF0000; margin-top: 15px; ";
									
								}else if($objResult2["status"] == "เก็บเงิน"){
								$colorbtns1s = " background-color: #CF6404; border-radius: 5px; width: 140px; height: 60px; border-color: #CF6404; margin-top: 15px; ";
									
								}else{ 
								$colorbtns1s = " background-color: #2FBA33; border-radius: 5px; width: 140px; height: 60px; border-color: #2FBA33; margin-top: 15px; ";
								}
								
									
								$sql = "SELECT * FROM member_table Where  tablein = '". $objResult2["pk"] ."' and ( closebill = '' or closebill = 'กำลังทาน' or closebill = 'เก็บเงิน'  ) ";  
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
						
						<?php  if($objResult2["status"] == "ไม่ว่าง"){ ?>
 						<a href="index_table.php?table=<?php echo $objResult2["pk"]; ?>"    >
						<button type="button" class="btn btn-primary" style=" <?php echo $colorbtns1s; ?>  " > <font color="<?php echo $txtcolor1; ?>" size="3px" class="serif1" style="font-size: 14px; " >     <?php echo $objResult2["name"]; ?> 
						<br> 
						<?php echo $load_name; ?> 
						</font> </button> 
						
						</a>
						
						<?php  }else if($objResult2["status"] == "เก็บเงิน"){ ?> 
 						<a href="index_table_Checkbill.php?table=<?php echo $objResult2["pk"]; ?>"    >
						<button type="button" class="btn btn-primary" style=" <?php echo $colorbtns1s; ?> " > <font color="<?php echo $txtcolor1; ?>" size="3px" class="serif1" style="font-size: 14px; " >     <?php echo $objResult2["name"]; ?>  
						<br> 
						<?php echo $load_name; ?> 
						</font> </button>  
						</a>
						
						<?php }else{ ?> 
						<button type="button" class="btn btn-primary" style=" <?php echo $colorbtns1s; ?> " > <font color="<?php echo $txtcolor1; ?>" size="3px" class="serif1" style="font-size: 14px; " >     <?php echo $objResult2["name"]; ?>  </font> </button>  
						
						<?php } ?> 
    					<?php }   ?> 
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