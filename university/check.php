<?php
		include("database.php");
		
		
			$email=$_POST["email"];
			$password=$_POST["password"];
			$department=$_POST["department"];
			
			$rs=mysql_query("select * from vc where email='$email' AND password='$password' AND name='$department' ");
			$rs1=mysql_query("select * from department where email='$email' AND password='$password' AND department='$department' ");
			echo $email. $password. $department;
			if($r=mysql_fetch_array($rs)){
				setCookie("user",$department,time()+6000);
				header("location:$department.php");	
			}
			
			else if($r1=mysql_fetch_array($rs1)){
				setcookie("user",$department,time()+6000);
				header("location:$department.php");
	        }
			else{
				header("location:login.php?err=1");
				
		}
		



?>