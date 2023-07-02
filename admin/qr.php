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
                     <font size="4px" color="#000000">  จัดการ QRCODE โต๊ะ </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                     
                     
                     	<?php
								$colorbtns1s = " background-color: #CF6404; border-radius: 5px; width: 100px; height: 30px; border-color: #CF6404; margin-top: 15px; ";
							 
								$txtcolor1 = "#000"; 
								$txtcolor2 = "#FFF"; 
 
						?> 
                        <div class="col-lg-12" align="left"   >  
						<?php  
							 
							$sql2 = "SELECT * FROM table_data where name != '' order by pk asc  ";  
	 
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{            	 
						?>    
 						  <div class="col-lg-2" style="border: 0px solid #CF6404; margin-top: 10px; margin-bottom: 5px;  " >
 						  <div class="col-lg-12" style="border: 1px solid #CF6404; margin-top: 10px; margin-bottom: 5px;  " >
							 
							  <div align="center" style="margin-top: 15px;"> 
								<font color="<?php echo $txtcolor1; ?>" size="3px" class="serif1" style="font-size: 14px; " >  <?php echo $objResult2["name"]; ?>   </font>  
							  </div>
							  <div align="center" style="margin-top: 5px; margin-bottom: 5px;"> 
								<a href="print_QR.php?major=<?php echo $objResult2["pk"]; ?>" target="_blank"    >
								<button type="button" class="btn btn-sm btn-primary" style=" <?php echo $colorbtns1s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style="font-size: 14px; " >  พิมพ์ </font> </button> </a>  
							  </div>
						  </div>
						  </div> 
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