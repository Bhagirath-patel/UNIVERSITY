<?php
					
		include("database.php");
				$sr=0;
				
				
				
				$rs=mysql_query("select max(sr) from news_section");
					while($r=mysql_fetch_array($rs)){
						$sr=$r[0];
					}
					$sr=$sr+1;
               
					$ws=$_POST["shamachar"];  // retrieve cookie ( email id)
					//$email=$_POST["email"];
					$img=$ws.".pdf";  // teja@tzn.com.jpg
					$target = "shamachar/";  //  pro/teja@tzn.com.jpg
					$target = $target . $img;  //  pro/teja@tzn.com.jpg
					//$pic=($_FILES['photo']['name']);
					$size=($_FILES['photo']['size']);
					
					if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
					 { 
						 mysql_query("insert into news_section values ('$sr','$ws')")or die(mysql_query());
											header("location:allnews.php?succ=1");
						} 
					else 
					{ 
						 header("location:addnews.php?dlt=1");
					} 
							
					?> 
					