<?php
			include("database.php");
            $sr=0;
            $rs=mysql_query("select max(sr) from stu_placement");
			while($r=mysql_fetch_array($rs)){
				
			   $sr=$r[0];
			}
			$sr=$sr+1;
			
			$name=$_POST["name"];  // retrieve cookie ( email id)
			$fname=$_POST["fname"];  // retrieve cookie ( email id)
			$cname=$_POST["cname"];  // retrieve cookie ( email id)
			$pkg=$_POST["pkg"];  // retrieve cookie ( email id)
			//$email=$_POST["email"];
			$img=$name.".jpg";  // teja@tzn.com.jpg
			$target = "placement/";  //  pro/teja@tzn.com.jpg
			$target = $target . $img;  //  pro/teja@tzn.com.jpg
			//$pic=($_FILES['photo']['name']);
			$size=($_FILES['photo']['size']);
			if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
			 { 
				mysql_query("insert into stu_placement values('$sr','$name','$fname','$cname','$pkg')")or (mysql_error());
				header("location:placementallstu.php?succ=1");
				} 
			else 
			{ 
				 header("location:degsyallbus.php?dlt=1");
			} 
?> 