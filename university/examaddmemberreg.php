<?php
					
		include("database.php");
				$sr=0;
				
				$controller=$_POST["controller"];
				$email=$_POST["email"];
				$password=$_POST["password"];
				$date=$_POST["date"];
				$parent=$_POST["parent"];
				
				$contact=$_POST["contact"];
				
				$rs=mysql_query("select max(sr) from exam");
					while($r=mysql_fetch_array($rs)){
						$sr=$r[0];
					}
					$sr=$sr+1;
				
				mysql_query("insert into exam values ('$sr','$controller','$email','$password','$contact','$date','$parent')")or die(mysql_query());
				
				mysql_query("update employee set password='$password',email='$email',contact='$contact' where name='$controller' ")or die(mysql_query());
				
					header("location:exam.php?suc=1");
		?>