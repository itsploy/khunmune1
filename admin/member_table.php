<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
    $name = "";  
    $tablein = "";
    $timein = "";      
    $create_date = ""; 
                 
 
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
            $strSQL = "Delete From member_table  ";
            $strSQL .="WHERE pk = '".$_GET["CusID"]."'  ";
            $objQuery = mysqli_query($objCon,$strSQL); 

                //echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
                echo("<script>window.location = 'member_table.php';</script>"); 
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
                    <font size="4px" color="#000000">  ข้อมูลการจองโต๊ะ </font>   
                 </div> 
                 </font> 


                 </div>

                 <div   class="col-lg-3"  align="left"> 
						  	  <table width="100%" border="0">
								<tr>
									<td width="40%"> 
									<font color="black" size="3px" class="serif">  ค้นหาชื่อสินค้า    </font>   
									<form action="member_table.php" method="get" >
									 
									<div class="input-group   "  style="border: 1px solid #003566; border-radius: 4px; height: 35px;  background-color: #FAFAFA; ">
									<input class="form-control   "   type="search" style="background-color: #FAFAFA;  border: 0px; height: 33px;"    id="searchname" name="searchname"  value="<?php echo $searchname; ?>"     >
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
                           
                           
						 
						 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
                            <div class="table-responsive"  >
                            <table id="key_product"  class=" table    tablemobile  " border="0"    >
                            <thead> 
                                             <tr>
                                                <th width="20%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
                                                <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></th>    
                                                <th width="20%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
                                                <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ชื่อลูกค้า   </font></div></th>    
                                                <th width="20%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
                                                <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    โต๊ะที่จอง   </font></div></th>    
                                                <th width="20%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
                                                <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เวลา   </font></div></th>    
                                                <th width="20%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 0px solid #FFF; "><div align="center"> 
                                                <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    วันที่จอง   </font></div></th>    
  
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

                                       
                                        $sql2 = "SELECT * FROM member_table  
                                         
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
                                        <td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> <?php echo $objResult2["name"]; ?> </font></div></td>  
                                        <td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> <?php echo number_format(0+$objResult2["tablein"]); ?>  </font></div></td>     
                                        <td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> <?php echo $objResult2["timein"]; ?>  </font></div></td>      
                                        <td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> <?php echo $objResult2["create_date"]; ?>  </font></div></td> 
                                        
                                        
                                        <!-- end modal small -->    
                                        
                                        
                                         
                                        </tr>      
                                        <?php  
                                        $i++; 
                                        }
                                        ?>   
                                    </tbody>
 
                                     </table>  
                                   </div>
                          </div>
               
                       <?php  
                        if(isset($_GET["page"])){
                        if( ($_GET["page"]) == "1" ){
                        $sql = "SELECT * FROM member_table Where  pk = '". $_GET["CusID"] ."' ";  
                        $query = mysqli_query($objCon,$sql); 
                        while($objResult = mysqli_fetch_array($query))
                        {  
                            $name = $objResult["name"];  
                            $tablein = $objResult["tablein"];
                            $timein = $objResult["timein"];       
                            $create_date = $objResult["create_date"];   
                                 
 
                        }   
                        ?> 
                     
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

