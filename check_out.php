<?php
session_start();
	 
					$_SESSION["UserID"] = "";
					$_SESSION["Status"] = "";
					$_SESSION["User"] = "";
					$_SESSION["Fullname"] = ""; 

				 
					echo("<script>alert('Login out Sucess !!')</script>");
					echo("<script>window.location = 'index.php';</script>");
					 
?>