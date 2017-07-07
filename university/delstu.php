<?php
    include("database.php");
	
	if(isset($_GET["name"])){
	$d=$_GET["name"];
	
	mysql_query("update student set flag=1 where name='$d' ");
	header("location:allstu.php?delete=1");
	}
?>