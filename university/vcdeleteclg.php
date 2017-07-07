<?php
    include("database.php");
	
	if(isset($_GET["name"])){
	$d=$_GET["name"];
	mysql_query("delete from college where name='$d' ");
	
	header("location:vcallclg.php?delete=1");
	}
?>