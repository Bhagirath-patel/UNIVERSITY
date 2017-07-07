<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Student Panel</title>
		  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
            
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
            <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    
	    <script src="jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#degree").change(function(){
			var v=$("#degree").val();
			$.post(
			"sem3.php",
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
				<br><i class="fa fa-home" aria-hidden="true"><b>&nbsp;&nbsp;<a href="student_panel.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i></a></i>
					
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
		<!-- student form-->	
			<div class="col-sm-10">
				<div class="w3-card-12">
			 <div class="panel panel-body">
			 <div class="well well-sm w3-center">
				<b class="w3-text-pink" >-:<i style="text-decoration:underline"> Student Registration </i>:-</b>
			</div>
			<form method="post" action="addstureg.php">
			
				<div class="row" style="height:10px"></div>
				<div class="row">
					<label class="col-sm-3">Roll No:-</label>
					<div class="col-sm-6">
						<input class="form-control" type="text" name="roll" placeholder="iitstu001" required="required">
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-sm-3">Name:-</label>
					<div class="col-sm-6">
						<input class="form-control" type="text" name="name" placeholder="Name" required="required">
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-sm-3">Father Name</label>
					<div class="col-sm-6">
						<input class="form-control" type="text" name="fname" placeholder="father name" required="required">
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-sm-3">Mother Name</label>
					<div class="col-sm-6">
						<input class="form-control" type="text" name="mname" placeholder="mother name" required="required">
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-sm-3">Date Of Birth:-</label>
					<div class="col-sm-6">
						<input class="form-control" type="date" name="dob" required="required">
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-sm-3">Degree</label>
					 <div class="col-sm-6">
					 <select name="degree" class="form-control" id="degree">
					 <option>Select Degree</option>
					<?php
					 include("database.php");
					 $rs = mysql_query("select * from degree_section");
					 while($r=mysql_fetch_array($rs)){
						 
						 ?>
						 <option value="<?=$r[1]?>"><?=$r[1]?></option>
					<?php
					 }
					?>	 
					</select>
					</div>
				</div>
				<br>
				
				<div id="show"></div>
				
				
				<div class="row">
					<label class="col-sm-3">Semester</label>
					 <div class="col-sm-6">
					 <select name="semester" class="form-control">
					 <option>Select Semester</option>
					 <option>No</option>
					 <option>1</option>
					 <option>2</option>
					 <option>3</option>
					 <option>4</option>
					 <option>5</option>
					 <option>6</option>
					 <option>7</option>
					 <option>8</option>
					</select>
				</div>
			    </div><br>
				<div class="row">
					<label class="col-sm-3">year</label>
					 <div class="col-sm-6">
					 <select name="year" class="form-control">
					 <option>Select year</option>
					
					 <option>1</option>
					 <option>2</option>
					 <option>3</option>
					 <option>4</option>
					 
					</select>
				</div>
			    </div><br>
				<div class="row">
					<label class="col-sm-3">College:-</label>
					 <div class="col-sm-6">
					 <select name="college" class="form-control">
					 <option>select college</option>
					<?php
					 include("database.php");
					 $r = mysql_query("select * from college");
					 while($rs=mysql_fetch_array($r)){
						 $C1=$rs[1];
						 
						 ?>
						 <option value="<?=$C1?>"><?=$C1?></option>
					<?php
					 }
					?>	 
					</select>
					</div>
				</div><br>	 
				<div class="row">
					<label class="col-sm-3">Contact:-</label>
					<div class="col-sm-6">
						<input  class="form-control" type="text" name="contact" placeholder="1234567890" required="required">
					</div>
				</div>
				<br>
				<div class="row">
					<label class="col-sm-3">fees submit</label>
					 <div class="col-sm-6">
					 <select name="fees" class="form-control">
					 <option>yes</option>
					
					 <option>no</option>
			
					 
					</select>
				</div>
			    </div><br>
				<br>
				<div class="w3-center">
				<button class="btn btn-primary">Registration</button>
				</div>
			</form>
			</div></div>
			
			
			</div>
		<!-- student form close-->
		</div>
	</div>	

			<?php
		     }
			?>
   </body>
</html>