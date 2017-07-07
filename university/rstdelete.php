<?php
    include("database.php");
	
	if(isset($_GET["roll"])){
	$d=$_GET["roll"];
	
	mysql_query("update result set flag=1 where roll_no='$d' ");
	header("location:allresult.php?delete=1");
	}
?>