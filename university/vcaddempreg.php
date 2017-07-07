<?php
					
		include("database.php");
				$sr=0;
				
				$name=$_POST["name"];
				$email=$_POST["email"];
				$password=$_POST["password"];
				$date=$_POST["date"];
				$parent=$_POST["parent"];
				$department=$_POST["department"];
				$contact=$_POST["contact"];
				
				$rs=mysql_query("select max(sr) from employee");
					while($r=mysql_fetch_array($rs)){
						$sr=$r[0];
					}
					$sr=$sr+1;
				
				mysql_query("insert into employee values ('$sr','$name','$email','$password','$date','$parent','$department','$contact')")or die(mysql_query());
					header("location:vcdepart.php?suc=1");
		?>