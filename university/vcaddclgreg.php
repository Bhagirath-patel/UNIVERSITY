<?php
					
		include("database.php");
				$sr=0;
				
				$name=$_POST["name"];
				
				$address=$_POST["address"];
				
				$date=$_POST["date"];
				
				$contact=$_POST["contact"];
				
				$rs=mysql_query("select max(sr) from college");
					while($r=mysql_fetch_array($rs)){
						$sr=$r[0];
					}
					$sr=$sr+1;
				
				mysql_query("insert into college values ('$sr','$name','$address','$date','$contact')")or die(mysql_query());
					header("location:vcallclg.php?suc=1");
		?>