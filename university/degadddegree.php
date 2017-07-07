<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Degree Department</title>
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
		 
		 <script src="jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#sem").change(function(){
			var v=$("#sem").val();
			$.post(
			"semster.php",
			{code:v},
			function(data){
				$("#show").html(data);
			});
		});
	});
	</script>
		 
		 
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
				<br><i class="fa fa-home" aria-hidden="true"><b>&nbsp;&nbsp;<a href="degree.php"> HOME </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<i class="fa fa-caret-right"></i></a></i>
				
				  </div>
				  
				  
			    <br><br><a href="degallmember.php" class="fa fa-file-text" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;All Member</b></a>
				<br><br><a href="degaddmember.php" class="fa fa-file-text" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;Add Member</b></a>
				<br><br><a href="degalldegree.php" class="fa fa-file-text" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;All Degree</b></a>
				<br><br><a href="degadddegree.php" class="fa fa-file-excel-o" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;Add Degree</b></a>
				<br><br><a href="degaddbranch.php" class="fa fa-file-excel-o" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;Add Branch</b></a>
				<br><br><a href="degallbranch.php" class="fa fa-file-excel-o" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;All Branch</b></a>
				<br><br><a href="degsyallbus.php" class="fa fa-file-excel-o" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;Syllabus</b></a>
				
	</div>
			
			<div class="col-sm-10">
			
			<div class="row">	
			<div class="col-sm-4"></div>
			<div class="col-sm-4 w3-card-12" align="center">
				<b class="w3-text-pink" style="font-size:25px; text-decoration:underline">Degree Detail:-</b>
			</div>
			<div class="col-sm-4"></div>
			</div>
			<div class="row" style="height:20px"></div>
				 <form method="post" action="degaddreg.php">
					<div class="row">
					<div class="col-sm-3">
						<label>Degree Name:-</label>
						</div>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="degree" placeholder="Degree" required="required">
						</div>
					</div>
					
					<div class="row" style="height:10px"></div>
					<div class="row">
					<div class="col-sm-3">
						<label>Year:-</label>
					</div>
						<div class="col-sm-9">
							<input class="form-control" type="number" name="year" placeholder="Number Of Year" required="required">
						</div>
					</div>
				    <div class="row" style="height:10px"></div>
					<div class="row">
					    <div class="col-sm-3">
						<label>Semester:-</label>
						</div>
						<div class="col-sm-9">
							<select name="semester" class="form-control" id="sem">
							    <option>Select Semester</option>
							     <option value="yes">YES</option>
								<option value="no">NO</option>
							
							</select>
						</div>
					</div>
					<div class="row" style="height:10px"></div>
					<div id="show">
					</div>
					<div class="row" style="height:10px"></div>
					<div class="row">
							<div class="col-sm-4"></div>
							<div class="col-sm-4"><input type="submit" class="btn btn-success" value="Add Degree"></div>
							<div class="col-sm-4"></div>
							</div>
				 </form>
				
			</div>
		</div>
	</div>	

			<?php
		     }
			?>
   </body>
</html>