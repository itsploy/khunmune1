<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	$name = "";
	$telphone = "";
	$line = "";
	$username = "";
	$password = "";
				 
 
	$searchname = "";
	if(empty($_GET["searchname"])){
		
	}else{
		$searchname = $_GET["searchname"];
	}
 	 
		 
		 
	$searchname2 = "";
	if(empty($_GET["searchname2"])){
		
	}else{
		$searchname2 = $_GET["searchname2"];
	}


	
    
	if(isset($_GET["Action"])){
		 
	if($_GET["Action"] == "Del2")
	{  
			$strSQL = "Delete From member_all  ";
			$strSQL .="WHERE pk = '".$_GET["CusID"]."'  ";
			$objQuery = mysqli_query($objCon,$strSQL); 

				//echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
				echo("<script>window.location = 'staff.php';</script>"); 
		 }  
		
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
                     <font size="4px" color="#000000">  เเก้ไขข้อมูล </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      
                        <?php  
						$sql = "SELECT * FROM member_all Where  pk = '". $_SESSION["UserID"] ."' ";  
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{  
							$name = $objResult["name"];  
							$line = $objResult["line"];
							$telphone = $objResult["telphone"];     
							$username = $objResult["username"];   
							$password = $objResult["password"];    
							$postion = $objResult["status"];   

 
						}  
						?> 
                      
                      
                      
                      
                    	 <script>
							function validateForm() {  
							 var x1 = document.getElementById("telphone").value; 
							 var chkx1 = x1.length;
							 if (chkx1 < 10) {
								alert(" กรุณากรอก เบอร์โทรติดต่อ  เท่ากับ 10 ตัวอักษร ");
								return false;
							 }
 
							
							
							}
						</script>
                           
						  <form role="form" name="frmMain" method="post" action="save_staff_update2.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
						    <input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $_SESSION["UserID"]; ?>" >
                          
                      	  
 
                          
                   		 <div class="col-md-12" style="margin-top: 20px; " >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ข้อมูลเข้าสู่ระบบ </font>    
							</div>
						  </div>  
                  		    
                  		 <div class="col-lg-12 ">   </div> 
                          
                          
                   		 <div class="col-md-4" style="margin-top: 0px; " >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ชื่อผู้ใช้: </font>   
							  <input type="text" class="form-control" id="username" name="username"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $username; ?>"   >
							</div>
						  </div>  
                  		    
                  		 <div class="col-lg-12 ">   </div> 
                   		 <div class="col-md-4" style="margin-top: 0px; " >	
							<div class="form-group">
							   <font color = '#000' size="3px" > รหัสผ่าน: </font>   
							  <input type="text" class="form-control" id="password" name="password"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $password; ?>"   >
							</div>
						  </div>  
                  		 <div class="col-lg-12 ">   </div> 
                  		     
                            <div class="col-lg-12" align="left"   > 
							  <div class="form-group">     

							  <button type="button" class="btn btn-primary" style="background-color: #56BFB4; border-radius: 5px; width: 130px; height: 40px; border-color: #56BFB4; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

								  <button type="button" class="btn btn-primary" style="background-color: #CAD1DB; border-radius: 5px; width: 130px;  height: 40px; border-color: #CAD1DB; border: 1px solid  #CAD1DB;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 
 
							  
							  
							  
									  <!-- modal small -->
									<div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
									<div class="modal-dialog modal-md" role="document">
										<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="smallmodalLabel"> ยืนยันทำรายกาาร </h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										</div>
										<div class="modal-body">
										<div class="col-lg-12" align="center">
										 
											<button type="submit" class="btn btn-primary" style="background-color: #56BFB4; border-radius: 5px; width: 130px; height: 40px; border-color: #56BFB4;  margin-top: 15px; " > <font color="#000000" size="2px" class="serif1" > <b>  ตกลง   </b> </font> </button> 
									 		 
									 
											<button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" style="background-color: #CAD1DB; border-radius: 5px; width: 130px;  height: 40px; border-color: #CAD1DB; border: 1px solid  #CAD1DB;  margin-top: 15px;  "  > <font color="#000000" size="2px" class="serif1" > <b>   ไม่   </b> </font> </button> 

											   
										</div> 
										</div> 
										</div>
									</div>
									</div>
									<!-- end modal small --> 
							     
						  	  </div> 
						  </div>  
                          
						 </form>
                      
                      
                      
                       
                      
                      
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