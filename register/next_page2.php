<?php
include('header.php');
 


?>
    
        <!-- loader -->
    <div id="loader">
        <img src="../logo.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader" style="background-color: #CF6404; ">
        <div class="left">
            <a href="../index_member.php" class="headerButton goBack"  >
                <img src="img/icback2.png" style="width: 15px"> 
            </a>
        </div>
        <div class="pageTitle">
         <font color="#FFF">   โต๊ะ    </font>
        </div>
        <div class="right" style="display: none; ">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#addCardActionSheet">
                <ion-icon name="add-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->      
            
            
     
				
    <div id="appCapsule">
			<style>
				.grid-container {
				display: grid;
				grid-template-columns: 50% 50% ;  
				}
				.grid-item {  
				padding-right: 3px; 
				}
			</style>
        	<div class="section inset mt-2">
            <div class=" " id="accordionExample1"  >
                  <style>
												.input-group.input-group-unstyled input.form-control {
														-webkit-border-radius: 4px;
														   -moz-border-radius: 4px;
																border-radius: 4px;
													}
													.input-group-unstyled .input-group-addon {
														border-radius: 4px;
														border: 0px;
														background-color: transparent;
													}
												</style> 
                   
                  	
				  <div class=" col-lg-12 " style="background-color: #CF6404; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px; " align="left" >
                       
				  <div class=" col-lg-12 " style="background-color: #CF6404;   " align="left" >
                  <div class=" col-lg-12 " style="margin-top: 5px;"> &nbsp; </div>
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 6px;" > 
                     <font size="4px" color="#FFFFFF" style="font-size: 20px;" >  “ ยินดีต้อนรับ ” </font>   
                  </div> 
                  </font> 
                  </div> 
				  <div class=" col-lg-12 " style="background-color: #CF6404; " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 6px;" > 
                     <font size="4px" color="#FFFFFF" style="font-size: 17px;" >  คุณ <?php echo $_GET["data1"]; ?> </font>     
                  </div> 
                  </font> 
                  </div> 
				  <div class=" col-lg-12 " style="background-color: #CF6404;  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 6px;" >  
                     <font size="4px" color="#FFFFFF" style="font-size: 17px;" >    <?php echo DateThai(date('d-m-Y'))." ".DateThai2(date('d-m-Y')); ?> </font>  
                  </div> 
                  </font> 
                  </div>  
                     <br>   
                  </div>  
                  
                  
                  
				  <div class=" col-lg-12 " style="background-color: #FFF; height: 38px; " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 5px;" > 
                     <font size="4px" color="#000000" style="font-size: 17px;" >  คุณยังไม่ได้จองโต๊ะ </font>   
                  </div> 
                  </font> 
                  </div> 
                    	 
                   <?php  
					$total1 = 0;
					$total2 = 0;
					$sql2 = "SELECT * FROM table_data where name != '' order by pk asc  ";
					$query2 = mysqli_query($con,$sql2); 
					while($objResult2 = mysqli_fetch_array($query2))
					{   
						if($objResult2["status"] == "ว่าง"){
							$total1++;
						}else{
							$total2++;
						}
					}
					?>    	 
                    	 
				  <div class=" col-lg-12 " style="background-color: #FFF; height: 38px; " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 0px;" > 
                     <font size="4px" color="#000000" style="font-size: 15px;" >  เลือกจองโต๊ะ &nbsp; </font>   
                     <font size="4px" color="#2FBA33" style="font-size: 15px;" >  ว่าง : <?php echo number_format(0+$total1); ?> &nbsp;&nbsp; </font>   
                     <font size="4px" color="#E33C3D" style="font-size: 15px;" >  ไม่ว่าง :  <?php echo number_format(0+$total2); ?>  </font>   
                  </div> 
                  </font> 
                  </div> 
                    	
                     	<?php
						$colorbtns1s = " background-color: #2FBA33; border-radius: 5px; width: 150px; height: 45px; border-color: #2FBA33; margin-top: 15px; ";
							 
						$txtcolor1 = "#FFFFFF"; 
 
						?> 
                        <div class="col-lg-12" align="center"   >  
						<?php  
							$sql2 = "SELECT * FROM table_data where name != '' order by pk asc  ";  
	 
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{  
								
								
							$colorbtns1s = " background-color: #2FBA33; border-radius: 5px; width: 150px; height: 45px; border-color: #2FBA33; margin-top: 15px; ";
							if($objResult2["status"] != "ว่าง"){ 
								$colorbtns1s = " background-color: #FF0000; border-radius: 5px; width: 150px; height: 45px; border-color: #FF0000; margin-top: 15px; ";
							}
						?>    
 						 
						<button type="button" class="btn btn-primary" style=" <?php echo $colorbtns1s; ?> " data-toggle="modal" data-target="#smallmodal<?php echo $objResult2["pk"]; ?>" > <font color="<?php echo $txtcolor1; ?>" size="3px" class="serif1" style="font-size: 14px; " >    <?php echo $objResult2["name"]; ?>     </font> </button>  
   					
   						
   					
   						  <!-- modal small -->
						<div class="modal fade" id="smallmodal<?php echo $objResult2["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true" style="margin-top: 30px; ">
						<div class="modal-dialog modal-md" role="document">
										<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="smallmodalLabel"> 
										 	<font style="font-size: 19px;" color="#000">
												คุณต้องการจองโต๊ะ  <?php echo $objResult2["name"]; ?> 
										 	</font> 
										</h5>
										<button type="button" class="close" style="display: none;" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										</div>
										<div class="modal-body">
										<div class="col-lg-12" align="center">
										 
						  				<form role="form" name="frmMain" method="get" action="save_table.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
						    			<input type="hidden" name="table" id="table" class="form-control " value="<?php echo $objResult2["pk"]; ?>" >
						    			<input type="hidden" name="data1" id="data1" class="form-control " value="<?php echo $_GET["data1"]; ?>" >
						    			<input type="hidden" name="data2" id="data2" class="form-control " value="<?php echo $_GET["data2"]; ?>" >

						 
										 	<div align="center">
										 	<font style="font-size: 19px;" color="#000">
										 		คุณต้องการจองโต๊ะ   <br>  
												<font style="font-size: 19px;" color="#CF6404" > “ หมายเลข <?php echo $objResult2["name"]; ?>  ” </font> ใช่หรือไม่
										 	</font>
										 	<hr>
										 	</div>
										 	
											<div class="col-lg-12" align="center" style="margin-top: 10px;">
											<div class="form-group">
											   <font color = '#000' size="3px" > โปรดเลือกเวลาที่ต้องการมา </font>   
											  <input type="time" class="form-control" id="timesave" name="timesave"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; width: 150px;  margin-top: 10px; "   >
											</div>
											</div> 
							 
											<button type="submit" class="btn btn-primary" style="background-color: #CF6404; border-radius: 20px; width: 130px; height: 40px; border-color: #CF6404;  margin-top: 15px; " > <font color="#FFF" size="2px" class="serif1" > <b>  ใช่   </b> </font> </button>  
									 		  
											<button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" style="background-color: #FFF; border-radius: 20px; width: 130px;  height: 40px;  border: 1px solid  #CF6404;  margin-top: 15px;  "  > <font color="#000" size="2px" class="serif1" > <b>   ไม่   </b> </font> </button> 
 
										</form> 
										</div> 
										</div> 
										</div>
									</div>
						</div>
									<!-- end modal small --> 
   					
   					
    					<?php }   ?> 
						</div>  
                 	 
                                         	                 	                 	                 	                 	            
       		            
       		                     
       		    
                
                </div>
            </div>
            <!-- * card block -->
  </div>       
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
<?php
include('footer.php');
?>