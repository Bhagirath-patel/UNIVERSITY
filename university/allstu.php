<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>All Student</title>
		  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
            
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
            <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
         
		 <style>
				table, th, td {
					border: 2px solid black;
				}
				table {
						border-collapse: collapse;
						width: 100%;
					}

					th {
						height: 50px;
					}
         </style>
    </head>
    <body class="w3-light-grey w3-content" style="max-width:1600px">
	<?php
		include("database.php");
		
		if(!isset($_COOKIE["user"])){
			header("location:login.php");
		}
		else{
			$dep=$_COOKIE["user"];
	?>
	 <div class="container-fluid">
            <div class="responsive">
			
			<div class="col-sm-12" style="background-color:pink">
				<div class="col-sm-10">
				</div>
				<div class="col-sm-2">
					<a href="logout.php"><b>Logout</b></a>
				</div>
                </div>		
       <div class="col-sm-2" style="background-color:#FF7F50; height:620px;">
				<div class="row" style="height:12px"></div>
				<div class="row">
						<div class="col-sm-4">
						<img src="img/universitylogo2.png" class="img-responsive">
						</div>
						<div class="col-sm-8">
						<h4><b class="w3-text-white">UNIVERSITY</b></h4>
						</div>
				</div>
				<img src="img/line.png" class="img-responsive">
				
				
				<div class="row">
						<div class="col-sm-4">
						<h1></h1>
						<img src="img/user.png" class="img-responsive img-rounded">
						</div>
						<div class="col-sm-8">
						<h5><b class="w3-text-white">Wel-Come<br><br><i>Bhagirath</i></b></h5>
						</div>
				</div>		
				<div class="dropdown">
					<br><a href="#" class="fa fa-home"><b class="w3-text-Black" data-toggle="dropdown"><a href="vc.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>
					
				  </div>
				  
			    <br><br><a href="allstu.php" class="fa fa-file-excel-o" aria-hidden="true" style="text-decoration:none">
				          <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp; All Student </b></a>
				<br><br><a href="addstu.php" class="fa fa-book" aria-hidden="true" style="text-decoration:none">
						  <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp; Add Student </b></a>
				<br><br><a href="placementaddstu.php" class="fa fa-book" aria-hidden="true" style="text-decoration:none">
						  <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp; Add Placement Student </b></a>
				<br><br><a href="placementallstu.php" class="fa fa-book" aria-hidden="true" style="text-decoration:none">
						  <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp; ALL Placement Student </b></a>
	</div>
			
			<div class="col-sm-10">
			<div class="row" style="height:15px"></div>
			<div class="row" style="font-size:23px">
			     <div class="col-sm-4"></div>
				 <div class="col-sm-4 w3-amber w3-card-12"><b>All Student in University</b></div>
				 <div class="col-sm-4"></div>
			</div>
			<div class="row" style="height:15px"></div>
			<?php
			   if(isset($_GET["suc"])){
	    echo '<b class="w3-text-pink" style="font-size:20px;">'."Successfully Add College in University".'</b>';
		}
		else if(isset($_GET["delete"])){
	    echo '<b class="w3-text-pink" style="font-size:20px;">'."Successfully Delete College in University".'</b>';
		}
		?>
				<table class="w3-table w3-striped w3-border" align="center">
					<thead>
					<tr class="w3-red">
					  <th>Roll No:</th>
					  <th>Name</th>
					  <th>FName</th>
					  <th>MName</th>
					  <th>DOB</th>
					  <th>Degree</th>
					  <th>Branch</th>
					  <th>Semester</th>
					  <th>Year</th>
					  <th>College</th>
					  <th>Contact</th>
					  <th>Delete</th>
					   
					</tr>
					</thead>
		    <?php
			    include("database.php");
				
				$r=mysql_query("Select * from student where flag='0'")or (mysql_error());
				while($rs=mysql_fetch_array($r)){
			?>
					<tr class="w3-hover-green">
					 
					  <td><b><?=$rs[1]?></b></td>
					  <td><b><?=$rs[2]?></b></td>
					  <td><b><?=$rs[3]?></b></td>
					  <td><b><?=$rs[4]?></b></td>
					  <td><b><?=$rs[5]?></b></td>
					  <td><b><?=$rs[6]?></b></td>
					  <td><b><?=$rs[7]?></b></td>
					  <td><b><?=$rs[8]?></b></td>
					  <td><b><?=$rs[9]?></b></td>
					  <td><b><?=$rs[10]?></b></td>
					  <td><b><?=$rs[11]?></b></td>
					  
					 
					  <td><b><a href="delstu.php?name=<?=$rs[2]?>">Delete</a></b></td>
					  
					</tr>
				<?php 
				   }
				?>
				</table>
				<div class="row" style="height:15px"></div>
		        <div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6 w3-center"><a href="addstu.php" class="btn btn-lg btn-primary btn-block">Add New Student</a></div>
				<div class="col-sm-3"></div>
				</div>
			</div>
		</div>
	</div>	

			<?php
		     }
			?>
   </body>
</html>