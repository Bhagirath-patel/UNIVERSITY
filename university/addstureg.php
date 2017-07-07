<?php
	include("database.php");
	$name=$_POST["name"];
	$roll=$_POST["roll"];
	$fname=$_POST["fname"];
	$mname=$_POST["mname"];
	$dob=$_POST["dob"];
	$degree=$_POST["degree"];
	$branch=$_POST["branch"];
	$semester=$_POST["semester"];
	$year=$_POST["year"];
	$contact=$_POST["contact"];
	$college=$_POST["college"];
	$fees=$_POST["fees"];
	$sr=0;
	$rs=mysql_query("select max(sr) from student");
	while($r=mysql_fetch_array($rs)){
						$sr=$r[0];
					}
	
				$sr=$sr+1;
	mysql_query("insert into student values('$sr','$roll','$name','$fname','$mname','$dob','$degree','$branch','$semester','$year','$college','$contact',0,'$fees',0) ")or (mysql_error());
	
	header("location:addstu.php?succ=1");
?>