<?php
	include("database.php");
	$sr=0;
	$degree=$_POST["degree"];
	$year=$_POST["year"];
	$semester=$_POST["semester"];
	$sem1=$_POST["sem1"];
	
	$rs=mysql_query("select max(sr) from degree_section")or die(mysql_error());
	while($r=mysql_fetch_array($rs)){
						$sr=$r[0];
					}
				$sr=$sr+1;	
	mysql_query("insert into degree_section values('$sr','$degree','$year','$semester','$sem1')");
	       header("location:degree.php?suc=1");
?>