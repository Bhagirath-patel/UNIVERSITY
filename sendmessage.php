<?php
	include("database.php");
	$sr=0;
	$name=$_POST["from"];
	$msg=$_POST["msg"];
	              $rs=mysql_query("select max(sr) from problem");
					while($r=mysql_fetch_array($rs)){
						$sr=$r[0];
					}
					$sr=$sr+1;
	mysql_query("insert into problem_section values('$sr','$name','university','$msg',1)");
	header("location:swc.php?succ=1");
?>