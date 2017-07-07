<?php
	include("database.php");
	$degree=$_POST["degree"];
	$branch=$_POST["branch"];
    $sr=0;
	$rs=mysql_query("select max(sr) from branch")or die(mysql_error());
	while($r=mysql_fetch_array($rs)){
						$sr=$r[0];
					}
	$sr=$sr+1;
	mysql_query("insert into branch values('$sr','$degree','$branch')");
		header("location:degaddbranch.php?suc2=1");
?>