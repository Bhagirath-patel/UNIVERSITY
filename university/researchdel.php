<?php
    include("database.php");
	
	if(isset($_GET["research"])){
	$d=$_GET["research"];
	mysql_query("delete from research where research_name='$d' ")or die(mysql_error());
	
	header("location:allresearch.php?delete=1");
	}
?>