<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	$name = "";
	$price = "";
	$typedata = "";
	$total = ""; 
	$price1 = ""; 
	$price2 = ""; 
				 
 
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
			$strSQL = "Delete From product  ";
			$strSQL .="WHERE pk = '".$_GET["CusID"]."'  ";
			$objQuery = mysqli_query($objCon,$strSQL); 

				//echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
				echo("<script>window.location = 'rice.php';</script>"); 
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
                     <font size="4px" color="#000000">  ประเภทอาหารจานเดียว </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                     
                        
						 <form role="form" name="frmMain" method="post" action="save_rice.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
                  		 <div class="col-md-4" style="margin-top: 20px; " >	 
                  		 <div class="col-md-12"  >	 
						 
							<div class="form-group">
							   <font color = '#000' size="3px" > ชื่อ </font>   
							  <input type="text" class="form-control" id="name" name="name"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $name; ?>"  >
							</div>
						  </div>   
                 		 
                 		 
                  		 <div class="col-lg-12 ">   </div>  
                    
                   		 <div class="col-md-6" style="margin-top: 0px; " >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ราคาธรรมดา </font>   
							  <input type="text" class="form-control" id="price1" name="price1"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" value="<?php echo $price1; ?>" maxlength="10" >
							</div>
						  </div> 
                   		 <div class="col-md-6" style="margin-top: 0px; " >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ราคาพิเศษ </font>   
							  <input type="text" class="form-control" id="price2" name="price2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" value="<?php echo $price2; ?>" maxlength="10"  >
							</div>
						  </div>  
                  		   
                  		 <div class="col-lg-12 ">   </div> 
                   		  <div class="col-md-12" style="margin-top: 0px; " >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เพิ่มรายการเครื่องเคียง </font>    
							</div>
						  </div>  
                 		     
						   <div class="col-md-10" style="margin-top: 0px; " >	
							<div class="form-group"> 
							  <input type="text" class="form-control" id="nametopping" name="nametopping"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; " placeholder=" ไข่ดาว ไข่เยี่ยวม้า หมูยอ กุนเชียง "  >
							</div>
						  </div> 
                   		  <div class="col-md-2" style="margin-top: 0px; " >	
							<div class="form-group">  
							   <a onClick="save_drop()"        >
								<button type="button" id="savedrop"  class="btn btn-sm btn-primary" style=" background-color: #5DC9C1; border-radius: 5px;   border-color: #FBFBFB; width: 100%; height: 40px;  " > 
								<font color="#FFF" size="2px" class="serif1" >  เพิ่ม   </font> 
								</button> </a>
							</div>
						  </div>  
                 		     
                 		      
                           <div class="col-md-12" id="table_payment" >  
                  		    
                  		      
                  		    
						   </div> 
                 		     
                 		     
                 		     
                 		     <script language="javascript">
								 $( document ).ready(function() {   
										 getTabel_new_con();   
									});
							 	
							 	 function getTabel_new_con() { 
										$.ajax({
											type: "GET",
											url: "get_topping3.php",
											success: function(result) {
												$('#table_payment').html(result);
											}
										});
									}
								     
								 /// ปุ่มลบ เรียกเป็น Class แถน 
								 $(document).on('click', '.btn-delete-fuck1', function() {
									var int1 = $(this).attr('data-id');

										// alert(int1);
										$.ajax({
											type: "POST",
											url: "delete_topping3.php",
											data: {del:int1},
											success: function( ) {  
											 getTabel_new_con();  
											}
										});   
								});
 
								 function save_drop()
								 { 
									var drop_topping = document.getElementById("nametopping").value;
									  
									if(drop_topping == ""){
										alert( " กรุณาระบุกรอกรายการเครื่องเคียง " );
									}else{
										var jsonString = "";  
										$.ajax({
											type: "POST",
											url: "save_topping3.php?drop_subject="+drop_topping,
											contentType: 'application/json',
											data: jsonString,
											success: function( ) {  
												document.getElementById("nametopping").value = "";
												getTabel_new_con();  
										}
										}); 
									}
									    
								 } 
							  
								 setInterval(function(){  
								  getTabel_new_con();  
								 }, 1000);
						  </script>
                 		 
                 		  
						  </div>  
                 		     
                 		     
                 		 <div class=" col-lg-2 ">
                           
							 <div class="col-md-12"  style="margin-top: 10px;"  ></div> 
							   <font color = '#000' size="3px" > &nbsp; </font>  
                        	
                            <style>
							.image-upload > input
							{
								display: none;
							}
							.upload-icon{
							  width: 100%; 
							  border: 2px solid #C2C2C2; 
							}
							.upload-icon img{
							  width: 100%; 
							  cursor: pointer;
							}
							.upload-icon.has-img {
								width: 100%; 
								border: none;
							}
							.upload-icon.has-img img {
								width: 100%;
								height: auto;
								border-radius: 18px;
								margin:0px;
							}
							</style> 
                   			<script type="text/javascript">
								function readURL1(input) { 
									if (input.files && input.files[0]) {
										var reader = new FileReader();

										reader.onload = function (e) {
											$('#blah1').attr('src', e.target.result);
										}

										reader.readAsDataURL(input.files[0]);
									}
								}  
							</script>	
                          
                          
                          	 <img src="images/up.png" style="width: 100%;" class="myAvatar" id="blah1" />
							 <input type="file" name="newAvatar" id="newAvatar" style="display:none;" onchange="readURL1(this);"  />
							 <script>
								$(".myAvatar").click(function() {
									$("#newAvatar").trigger("click");
								});
							 </script>
                           </div>    
                 		     
                 		       
                  		 <div class="col-lg-12 " style="margin-top: 25px;">   </div> 
                  		     
                            <div class="col-lg-12" align="left"   > 
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
						  </div>  
                          
						 </form>
                          
                 	 
                         	 <div class="col-lg-12" align="left"   > 
                         		<hr>	
							</div>
                	 
                             <div   class="col-lg-3"  align="left"> 
						  	  <table width="100%" border="0">
								<tr>
									<td width="40%"> 
									<font color="black" size="3px" class="serif">  ค้นหาชื่อสินค้า    </font>   
									<form action="rice.php" method="get" >
									 
									<div class="input-group   "  style="border: 1px solid #003566; border-radius: 4px; height: 35px;  background-color: #FFF; ">
									<input class="form-control   "   type="search" style="background-color: #FFF;  border: 0px; height: 33px;"    id="searchname" name="searchname"  value="<?php echo $searchname; ?>"     >
									<span class="input-group-append" style="  background-color: #FAFAFA; height: 33px;">
									  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA; height: 33px;" type="submit"> <i class="fa fa-search"></i>
									  </button>
									</span>
									</div>
									</form>
								
									</td> 
								</tr>
							</table>  
       		                 </div>
       		                 
       		                  
                             <div class="col-md-12" style="margin-top: 15px;" > 
								  <style>
																 .pagination {
																	list-style-type: none; 
																	display: inline-flex;
																	justify-content: space-between;
																	box-sizing: border-box;
																}
																.pagination li {
																	box-sizing: border-box;
																	padding-right: 10px;
																}
																.pagination li a {
																	box-sizing: border-box;
																	background-color: #e2e6e6;
																	padding: 8px;
																	text-decoration: none;
																	font-size: 12px;
																	font-weight: bold;
																	color: #616872;
																	border-radius: 4px;
																}
																.pagination li a:hover {
																	background-color: #d4dada;
																}
																.pagination .next a, .pagination .prev a {
																	text-transform: uppercase;
																	font-size: 12px;
																}
																.pagination .currentpage a {
																	background-color: #518acb;
																	color: #fff;
																}
																.pagination .currentpage a:hover {
																	background-color: #518acb;
																}
												</style> 
												
											<?php											
													$perpage = 20;
												if (isset($_GET['page2'])) {
													$page = $_GET['page2']; 
												 } else {
													$page = 1;
												} 

												if (empty($_GET['page2'])) {
													 $page = 1;
												 }  			
												$start = ($page - 1) * $perpage;


															
												$perpage = 20;
												if (isset($_GET['page2'])) {
													$page = $_GET['page2']; 
												 } else {
													$page = 1;
												} 

												 if (empty($_GET['page2'])) {
													 $page = 1;
												 }  			
												$start = ($page - 1) * $perpage;

												$addcode = "";
												if(empty($_GET["searchname"])){

												}else{
													$addcode = " and  name like '%".$searchname."%' ";
												}
												$addcode2 = ""; 
													 
											$sql2 = "SELECT * FROM product where name != '' and typedata = 'จานเดียว'  ".$addcode.$addcode2."  order by pk asc    "; 
											$query2 = mysqli_query($objCon, $sql2);
											$total_record = mysqli_num_rows($query2);
											$total_page = ceil($total_record / $perpage);
											 ?>  
											<?php if (ceil($total_record / $perpage) > 0): ?>
												<ul class="pagination">
																				<?php if ($page > 1): ?>
																				<li class="prev"><a href="rice.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Prev</a></li>
																				<?php endif; ?>

																				<?php if ($page > 3): ?>
																				<li class="start"><a href="rice.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">1</a></li>
																				<li class="dots">...</li>
																				<?php endif; ?>

																				<?php if ($page-2 > 0): ?><li class="page"><a href="rice.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
																				<?php if ($page-1 > 0): ?><li class="page"><a href="rice.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

																				<li class="currentpage"><a href="rice.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page ?></a></li>

																				<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="rice.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
																				<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="rice.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)-2): ?>
																				<li class="dots">...</li>
																				<li class="end"><a href="rice.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
																				<?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)): ?>
																				<li class="next"><a href="rice.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Next</a></li>
																				<?php endif; ?>
																			</ul>
											<?php endif; ?>

										</div>
                  	
                    		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
							<thead> 
											 <tr>
												<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></th>    
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รูปภาพ   </font></div></th>    
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รายชื่ออาหาร   </font></div></th>    
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รายละเอียด   </font></div></th>     
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ลบ - แก้ไข   </font></div></th>  
											 </tr>
										  </thead>  
										
										 
							<tbody>
									<?php 
										$i = 1;
										$total = 0;


										$perpage = 20;
										if (isset($_GET['page2'])) {
											$page = $_GET['page2']; 
										 } else {
											$page = 1;
										} 

										 if (empty($_GET['page2'])) {
											 $page = 1;
										 }  			
										$start = ($page - 1) * $perpage;
 
									   
	
 										if (empty($_GET['page2'])) { 
											$i = 1;
										}else if (($_GET['page2'] == 1)) { 
											$i = 1;
										}else{

											$i = ( ($_GET["page2"]-1) * 20 ) + 1; 
										}

									   
										$sql2 = "SELECT * FROM product  
										where name != ''   and typedata = 'จานเดียว'    ".$addcode.$addcode2."  
										order by pk asc limit {$start} , {$perpage}   ";  
	 
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
												$bg = "#F8FAFD"; 
												if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
												} 
											  
										?> 
										<tr style="background-color: <?php echo $bg; ?>; ">  
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> <?php echo $i; ?> </font></div></td>  
										
										<td  style=" border-left: 0px solid #F2F2F2; " align="center"><div align="center"> 
										<a data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>" style="cursor: pointer; "  >  
										<font size="3px" color="#000" style=" font-size: 13px; " >   รูปภาพ  </font>
										</a> 
										
										<!-- modal small -->
										<div class="modal fade" id="smallmodal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
												  <div class="row">   
												  <div class="col-lg-12">   
												  <font size="3px" color="black">   

											       <?php 
													if(!empty($objResult2["img"])){ 
													?>
													<img src="../img/<?php echo $objResult2["img"]; ?>" style="width: 100%;" >
													<?php
													} 
													?> 
												 </font> 
												 </div> 
												 </div>  
											</div> 
											</div>
										</div>
										</div>
										 
										</div></td> 
										
										
										 
										
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> <?php echo $objResult2["name"]; ?> </font></div></td>  
										
										<td  style=" border-left: 0px solid #F2F2F2; " align="center"><div align="center"> 
										<a data-toggle="modal" data-target="#smallmodaldetail<?php echo $i; ?>" style="cursor: pointer; "  >  
										<font size="3px" color="#000" style=" font-size: 13px; " >   รายละเอียด  </font>
										</a> 
										
										<!-- modal small -->
										<div class="modal fade" id="smallmodaldetail<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
												  <div class="row">   
												  <div class="col-lg-12" align="left">   
												  <font size="3px" color="black">   
													ชื่อ : <?php echo $objResult2["name"]; ?> <br>
													ราคาธรรมดา : <?php echo number_format(0+$objResult2["price1"]); ?> <br>
													ราคาพิเศษ : <?php echo number_format(0+$objResult2["price2"]); ?> <br>
										        
										        	<hr>
										        	รายการเครื่องเคียง <br> 
										        	<?php
													$i_ba = 1; 
													$bg = "#F8FAFD"; 
													$sql = "  
													SELECT *  FROM topping_bamee3  
													where name != ''  and bill_no = '".$objResult2["bill_no"]."'
													order by  pk asc "; 
													$query = mysqli_query($objCon,$sql); 
													while($objResult = mysqli_fetch_array($query))
													{
														echo $i_ba.". ".$objResult["name"]." <br> ";
														$i_ba++;
													}
													?>
										         
											        
												 </font> 
												 </div> 
												 </div>  
											</div> 
											</div>
										</div>
										</div>
										 
										</div></td> 
										
										 
										<!-- end modal small -->    
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; ">   
										
										<a  href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>?Action=Del2&CusID=<?php echo $objResult2["pk"];?>';}"  >
										  <font color="#000000" size="3px" class="serif1" style=" font-size: 13px; " >  ลบ  </font>  
										</a> 
											 -
										<a href="rice.php?CusID=<?php echo $objResult2["pk"];?>&page=1" ><font size="3px" color="red" style=" font-size: 13px; " > แก้ไข </font></a>   
										
										</font></div></td>  
										 
										</tr> 	   
										<?php  
										$i++; 
										}
										?>   
									</tbody>
 
									 </table>  
								   </div>
						  </div>
                     
                      
                      <?php } ?>
                      
                      
                      
                      
                      
                      	     
                       <?php  
						if(isset($_GET["page"])){
						if( ($_GET["page"]) == "1" ){
						$sql = "SELECT * FROM product Where  pk = '". $_GET["CusID"] ."' ";  
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{  
							$name = $objResult["name"];  
							$price1 = $objResult["price1"];
							$price2 = $objResult["price2"];  
							$img = $objResult["img"];       
							$bill_no = $objResult["bill_no"];       
 
						}   
							
						
						?> 
                            
                        
						 <form role="form" name="frmMain" method="post" action="save_rice_update.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
						   
						 <input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $_GET["CusID"]; ?>" >
						 <input type="hidden" name="bill_no" id="bill_no" class="form-control " value="<?php echo $bill_no; ?>" >
						 
                 		  
                  		 <div class="col-md-4" style="margin-top: 20px; " >	 
                  		 <div class="col-md-12"  >	 
						 
							<div class="form-group">
							   <font color = '#000' size="3px" > ชื่อ </font>   
							  <input type="text" class="form-control" id="name" name="name"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $name; ?>"  >
							</div>
						  </div>   
                 		 
                 		 
                  		 <div class="col-lg-12 ">   </div>  
                    
                   		 <div class="col-md-6" style="margin-top: 0px; " >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ราคาธรรมดา </font>   
							  <input type="text" class="form-control" id="price1" name="price1"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" value="<?php echo $price1; ?>" maxlength="10" >
							</div>
						  </div> 
                   		 <div class="col-md-6" style="margin-top: 0px; " >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ราคาพิเศษ </font>   
							  <input type="text" class="form-control" id="price2" name="price2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" value="<?php echo $price2; ?>" maxlength="10"  >
							</div>
						  </div>  
                  		   
                  		 <div class="col-lg-12 ">   </div> 
                   		  <div class="col-md-12" style="margin-top: 0px; " >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เพิ่มรายการเครื่องเคียง </font>    
							</div>
						  </div>  
                 		     
						   <div class="col-md-10" style="margin-top: 0px; " >	
							<div class="form-group"> 
							  <input type="text" class="form-control" id="nametopping" name="nametopping"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; " placeholder=" ไข่ดาว ไข่เยี่ยวม้า หมูยอ กุนเชียง "  >
							</div>
						  </div> 
                   		   <div class="col-md-2" style="margin-top: 0px; " >	
							<div class="form-group">  
							   <a onClick="save_drop()"        >
								<button type="button" id="savedrop"  class="btn btn-sm btn-primary" style=" background-color: #5DC9C1; border-radius: 5px;   border-color: #FBFBFB; width: 100%; height: 40px;  " > 
								<font color="#FFF" size="2px" class="serif1" >  เพิ่ม   </font> 
								</button> </a>
							</div>
						  </div>  
                 		     
                 		      
                           <div class="col-md-12" id="table_payment" >  
                  		    
                  		      
                  		    
						   </div> 
                 		     
                 		     
                 		     
                 		     <script language="javascript">
								 $( document ).ready(function() {   
										 getTabel_new_con();   
									});
							 	
							 	 function getTabel_new_con() { 
									var get_bill_no = document.getElementById("bill_no").value; 
										$.ajax({
											type: "GET",
											url: "get_topping3_re.php?bill_no="+get_bill_no,
											success: function(result) {
												$('#table_payment').html(result);
											}
										});
									}
								     
								 /// ปุ่มลบ เรียกเป็น Class แถน 
								 $(document).on('click', '.btn-delete-fuck1', function() {
									var int1 = $(this).attr('data-id');

										// alert(int1);
										$.ajax({
											type: "POST",
											url: "delete_topping3.php",
											data: {del:int1},
											success: function( ) {  
											 getTabel_new_con();  
											}
										});   
								});
 
								 function save_drop()
								 { 
									var drop_topping = document.getElementById("nametopping").value;
									var get_bill_no = document.getElementById("bill_no").value; 
									  
									if(drop_topping == ""){
										alert( " กรุณาระบุกรอกรายการเครื่องเคียง " );
									}else{
										var jsonString = "";  
										$.ajax({
											type: "POST",
											url: "save_topping3_re.php?drop_subject="+drop_topping+"&bill_no="+get_bill_no,
											contentType: 'application/json',
											data: jsonString,
											success: function( ) {  
												document.getElementById("nametopping").value = "";
												getTabel_new_con();  
										}
										}); 
									}
									    
								 } 
							  
								 setInterval(function(){  
								  getTabel_new_con();  
								 }, 1000);
						  </script>
                 		 
                 		  
						  </div>  
                 		     
                 		     
                 		 <div class=" col-lg-2 ">
                           
							 <div class="col-md-12"  style="margin-top: 10px;"  ></div> 
							   <font color = '#000' size="3px" > &nbsp; </font>  
                        	
                            <style>
							.image-upload > input
							{
								display: none;
							}
							.upload-icon{
							  width: 100%; 
							  border: 2px solid #C2C2C2; 
							}
							.upload-icon img{
							  width: 100%; 
							  cursor: pointer;
							}
							.upload-icon.has-img {
								width: 100%; 
								border: none;
							}
							.upload-icon.has-img img {
								width: 100%;
								height: auto;
								border-radius: 18px;
								margin:0px;
							}
							</style> 
                   			<script type="text/javascript">
								function readURL1(input) { 
									if (input.files && input.files[0]) {
										var reader = new FileReader();

										reader.onload = function (e) {
											$('#blah1').attr('src', e.target.result);
										}

										reader.readAsDataURL(input.files[0]);
									}
								}  
							</script>	
                          
                          
                          	 
                          	 <?php
								$showimg = "images/up.png";
								if(!empty($img)){ 
								$showimg = "../img/".$img;
								}
							 ?>
                          	 <img src="<?php echo $showimg; ?>" style="width: 100%;" class="myAvatar" id="blah1" />
							 <input type="file" name="newAvatar" id="newAvatar" style="display:none;" onchange="readURL1(this);"  />
							 <script>
								$(".myAvatar").click(function() {
									$("#newAvatar").trigger("click");
								});
							 </script>
                           </div>    
                 		     
                 		       
                  		 <div class="col-lg-12 " style="margin-top: 25px;">   </div> 
                  		     
                            <div class="col-lg-12" align="left"   > 
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
						  </div>  
                          
						 </form>
                      
                      
                      
                      
                      	<?php } } ?>
                      
                      
                      
                      
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