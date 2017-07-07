<?php
					
		include("database.php");
				$sr=0;
				$department=$_POST["department"];
				$controller=$_POST["controller"];
				$email=$_POST["email"];
				$password=$_POST["password"];
				$parent=$_POST["parent"];
				$contact=$_POST["contact"];
				
				$rs=mysql_query("select max(sr) from department");
					while($r=mysql_fetch_array($rs)){
						$sr=$r[0];
					}
					$sr=$sr+1;
				
				mysql_query("insert into department values ('$sr','$department','$controller','$email','$password','$parent','$contact')")or die(mysql_query());
				mysql_query("update employee set parent='parent',password='$password',department='$department' where name='$controller'")or die(mysql_query());
					header("location:vcdepart.php?suc1=1");
		?>