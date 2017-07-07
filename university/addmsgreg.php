<?php
	include("database.php");
	$to=$_POST["to"];
	$msg=$_POST["msg"];
	$sr=0;
					$rs=mysql_query("select max(sn) from problem_section");
					while($r=mysql_fetch_array($rs)){
						$sr=$r[0];
					}
			$sr=$sr+1;
			mysql_query("insert into problem values('$sr','university','$to','$msg',0) ");
			header("location:msgprob.php?suc=1");
?>