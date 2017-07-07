<?php
    include("database.php");
	
	if(isset($_GET["news"])){
	$d=$_GET["news"];
	mysql_query("delete from news_section where sr='$d' ")or (mysql_error());
	
	header("location:allnews.php?delete=1");
	}
?>