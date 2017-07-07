<?php
       include("database.php");
		$res=$_POST["research"];
		 // retrieve cookie ( email id)
		//$email=$_POST["email"];
		$img=$res.".pdf";  // teja@tzn.com.jpg
		$target = "research/";  //  pro/teja@tzn.com.jpg
		$target = $target . $img;  //  pro/teja@tzn.com.jpg
		//$pic=($_FILES['photo']['name']);
		$size=($_FILES['photo']['size']);
		
		$sr=0;
	$rs=mysql_query("select max(sr) from research")or die(mysql_error());
		while($r=mysql_fetch_array($rs)){
			$sr=$r[0];
		}
		$sr=$sr+1;
		
			
		if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
		 { 
	        mysql_query("insert into research values('$sr','$res')")or die(mysql_error());
			header("location:research.php?succ=1");
			} 
		else 
		{ 
			 header("location:research.php?dlt=1");
		} 
?> 