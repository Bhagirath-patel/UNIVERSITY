<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Acunt Depart All Member</title>
		  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
            
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
            <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
           
		   <style>
				table, th, td {
					border: 1px solid black;
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
						<h5><b class="w3-text-white">UNIVERSITY</b></h5>
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
				<div class="w3-dropdown-hover">
				<br><i class="fa fa-home" aria-hidden="true"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="account.php" style="text-decoration:none"> HOME </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				         <i class="fa fa-caret-right"></i></a></i>
				
				  </div>
				  
			    <br><br><a href="proballmember.php" class="fa fa-file-text" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;All Member</b></a>
				<br><br><a href="probaddmember.php" class="fa fa-file-excel-o" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;Add Member</b></a>
				<br><br><a href="probreceive.php" class="fa fa-file-excel-o" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;Receive Problem</b></a>
				<br><br><a href="probreply.php" class="fa fa-file-excel-o" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;Responce Problem</b></a>
	</div>
			
			<div class="col-sm-10">
					<div class="row" style="height:15px"></div>
			<div class="row" style="font-size:23px">
			     <div class="col-sm-3"></div>
				 <div class="col-sm-6 w3-amber w3-card-12"><b>All Member in Problem Department</b></div>
				 <div class="col-sm-3"></div>
			</div>
			<div class="row" style="height:15px"></div>
			<?php
			   if(isset($_GET["suc"])){
	    echo '<b class="w3-text-pink" style="font-size:20px;">'."Successfully Add Member".'</b>';
		}
		?>
				<table class="w3-table w3-striped w3-border" align="center">
					<thead>
					<tr class="w3-red">
					  <th>Serial Number</th>
					  <th>Name</th>
					  <th>E-mail</th>
					  
					  <th>Parent</th>
					  <th>Joining Date</th>
					  <th>Contact</th>
					  <th>Delete</th>
					   
					</tr>
					</thead>
		    <?php
			    include("database.php");
				
				$r=mysql_query("Select * from problem");
				while($rs=mysql_fetch_array($r)){
			?>
					<tr class="w3-hover-green">
					  <td><b><?=$rs[0]?></b></td>
					  <td><b><?=$rs[1]?></b></td>
					  <td><b><?=$rs[2]?></b></td>
					  <td><b><?=$rs[4]?></b></td>
					  <td><b><?=$rs[5]?></b></td>
					  <td><b><?=$rs[6]?></b></td>
					  <td><b><a href="#">Delete</a></b></td>
					  
					</tr>
				<?php 
				   }
				?>
				</table>
				<div class="row" style="height:15px"></div>
		        <div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6 w3-center"><a href="probaddmember.php" class="btn btn-lg btn-primary btn-block">Add New Member </a></div>
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