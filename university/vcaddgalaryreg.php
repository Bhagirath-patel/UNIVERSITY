<?php
			include("database.php");
            $sr=0;
            $rs=mysql_query("select max(sr) from galary");
			while($r=mysql_fetch_array($rs)){
				
			   $sr=$r[0];
			}
			$sr=$sr+1;
			$dg=$_POST["galary"];
			$br=$_POST["name"];  // retrieve cookie ( email id)
			//$email=$_POST["email"];
			$img=$dg.$br.".jpg";  // teja@tzn.com.jpg
			$target = "galary/";  //  pro/teja@tzn.com.jpg
			$target = $target . $img;  //  pro/teja@tzn.com.jpg
			//$pic=($_FILES['photo']['name']);
			$size=($_FILES['photo']['size']);
			if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
			 { 
				mysql_query("insert into galary values('$sr','$dg','$br')")or (mysql_error());
				header("location:vcaddgalary.php?succ=1");
				} 
			else 
			{ 
				 header("location:degsyallbus.php?dlt=1");
			} 
?> 