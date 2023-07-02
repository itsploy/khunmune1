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
         <font color="#FFF">   ลงทะเบียนสำหรับจองโต๊ะ    </font>
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
                   
                  	
				   <form role="form" name="frmMain" method="get" action="next_page2.php" enctype="multipart/form-data" onsubmit="return validateForm()"  >  
				   
				    <div class="col-lg-12" style="margin-top: 10px; margin-left: 5px; margin-right: 5px; " >	  
					<table width="100%" border="0">
					<tr>
					<td width="100%"> 
					<font color="black" size="2px" class="serif"  style="font-size: 14px;">  ชื่อ - นามสกุล    </font>    
															 
					<div class="input-group   "  style="border: 1px solid #CBCBCB; border-radius: 4px; ">
					<input class="form-control   "   type="text" style=" background-color: #FFF;  border: 0px solid #CBCBCB; color: #000; font-size: 12px;  "    id="data1" name="data1"   placeholder="   "       autocomplete="off" required >
															  
					</div>  
					</td> 
					</tr>
					<tr>
					<td width="100%"> 
					<font color="black" size="2px" class="serif"  style="font-size: 14px;"> เบอร์โทร </font>    
															 
					<div class="input-group   "  style="border: 1px solid #CBCBCB; border-radius: 4px; ">
					<input class="form-control   "   type="text" style=" background-color: #FFF;  border: 0px solid #CBCBCB; color: #000; font-size: 12px;  "    id="data2" name="data2"   placeholder="   " maxlength="10"       autocomplete="off" required   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  >
															  
					</div>  
					</td> 
					</tr>
					</table> 
				  </div> 				 
       		            
       		      <div class="col-lg-12" style="margin-top: 10px; margin-left: 5px; margin-right: 5px;   " >	  
					<div style=" margin-top: 10px; margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px; padding-left: 5px; padding-right: 5px; ">
						<font size="2px" color="#000"  style="font-size: 14px;" >
						 
							<button type="submit" class="btn btn-sm btn-primary" style="background-color: #CF6404; border-radius: 20px;   height: 40px; border-color: #CF6404; margin-top: 0px; width: 100%; "   > <font color="#FFF" size="3px" class="serif1"  style="font-size: 14px;"  >     ถัดไป    </font> </button> 
							 
						</font>
					</div>  
				  </div>        
      		                    
      		              
				  </form>                   	                 	                 	                 	                 	            
       		            
       		                     
       		    
                
                </div>
            </div>
            <!-- * card block -->
  </div>       
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
<?php
include('footer.php');
?>