<?php
    include("database.php");
	
	if(isset($_GET["delete"])){
	$d=$_GET["delete"];
	mysql_query("delete from department where email='$d' ");
	mysql_query("update employee set parent='child',department='employee' where email='$d' ");
	header("location:vcdepart.php?delete=1");
	}
?>