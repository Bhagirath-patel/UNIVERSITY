<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Exam Department</title>
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
				<br><i class="fa fa-home" aria-hidden="true"><b>&nbsp;&nbsp; HOME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i></a></i>
					
				  </div>
				  
			    <br><br><a href="#" class="fa fa-file-text" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;All Member</b></a>
				<br><br><a href="examaddmember.php" class="fa fa-file-excel-o" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;Add Member</b></a>
				<br><br><a href="examaddtt.php" class="fa fa-file-excel-o" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;Time-Table</b></a>
				<br><br><a href="examaddrst.php" class="fa fa-file-excel-o" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;Add Result</b></a>
			    
	</div>
			
			<div class="col-sm-10">
					
			<!---->
					<?php
			
				$roll=$_POST["roll"];
		
				include("database.php");
				$rs=mysql_query("select * from student where roll_no='$roll' ");
				while($r=mysql_fetch_array($rs)){
			?>
			
				
					<form method="post" action="resultshow.php?roll=<?=$roll?>">
						<div class="row">
						 <label class="col-sm-3">name:</label>
							   <div class="col-sm-6">
								<input class="form-control" type="text" value="<?=$r[2]?>" name="name"  required="required">
							</div>
							</div>
							<br>
							<div class="row">
						 <label class="col-sm-3">Fname:</label>
							   <div class="col-sm-6">
								<input class="form-control" type="text" value="<?=$r[3]?>" name="fname"  required="required">
							</div>
							</div>
							<br>
							<div class="row">
						 <label class="col-sm-3">Semester:</label>
							   <div class="col-sm-6">
								<input class="form-control" type="number" value="<?=$r[8]?>" name="semester"  required="required">
							</div>
							</div>
							<br>
							<div class="row">
						 <label class="col-sm-3">Year:</label>
							   <div class="col-sm-6">
								<input class="form-control" type="number" value="<?=$r[9]?>" name="year" required="required">
							</div>
							</div>
							<br>
							<div class="row">
						 <label class="col-sm-3">Degree:</label>
							   <div class="col-sm-6">
								<input class="form-control" type="text" value="<?=$r[6]?>" name="degree" required="required">
							</div>
							</div>
							<br>
							<div class="row">
						 <label class="col-sm-3">Branch:</label>
							   <div class="col-sm-6">
								<input class="form-control" type="text" value="<?=$r[7]?>" name="branch"  required="required">
							</div>
							</div>
							<br>
						<div class="row">
						 <label class="col-sm-3" align="right">subject1:</label>
							   <div class="col-sm-9">
							<input class="form-control" type="number" name="subject1" placeholder="number" required="required">
							</div>
							</div>
							<br>
							<div class="row">
							<label class="col-sm-3" align="right">subject2:</label>
							   <div class="col-sm-9">
							<input class="form-control" type="number" name="subject2" placeholder="number" required="required">
							</div>
							</div>
							<br>
								
						 <div class="row">
						 <label class="col-sm-3" align="right">subject3:</label>
							   <div class="col-sm-9">
							<input class="form-control" type="number" name="subject3" placeholder="number" required="required">
							</div>
							</div>
							<br>
							<div class="row">
							<label class="col-sm-3" align="right">subject4:</label>
							   <div class="col-sm-9">
							<input class="form-control" type="number" name="subject4" placeholder="number" required="required">
							</div>
							</div>
							<br>
							
						<div class="row">
						 <label class="col-sm-3" align="right">subject5:</label>
							   <div class="col-sm-9">
							<input class="form-control" type="number" name="subject5" placeholder="number" required="required">
							</div>
							</div>
							<br>
							<div class="row">
							<label class="col-sm-3" align="right">subject6:</label>
							   <div class="col-sm-9">
							<input class="form-control" type="number" name="subject6" placeholder="number" required="required">
							</div>
							</div>
							<br>
								
						<div class="row">
						<div class="col-sm-3"></div>
						 <label class="col-sm-3">Total:</label>
							   <div class="col-sm-6">
							<input class="form-control" type="number" name="total" placeholder=" Total-number" required="required">
							</div>
							</div>
							<br>
							<div class="w3-center">
								<br><button class="btn btn-primary">Submit Result</button>
							</div>
					</form>
				   <?php
		     }
			?>
					
			<!---->
			</div>
		</div>
	</div>	

			<?php
		     }
			?>
   </body>
</html>