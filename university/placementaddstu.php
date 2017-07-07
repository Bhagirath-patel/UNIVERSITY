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
		$("#nam").change(function(){
			var v=$("#nam").val();
			$.post(
			"father.php",
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
			
			<div class="col-sm-10">
				<div class="w3-card-12">
			 <div class="panel panel-body">
			 <div class="well well-sm w3-center">
				<b class="w3-text-pink" >-:<i style="text-decoration:underline"> Student Placement Registration </i>:-</b>
			</div>
			
			</div>
			</div>
			<!---->
				<div class="row">
		 <div class="col-sm-2"></div>
           <div class="col-sm-8 w3-card-12 w3-border">			
			<form enctype="multipart/form-data" action="placementaddstureg.php" method="post">
				<div class="row"  style="height:15px"></div>
				
				<div class="row">
					<label class="col-sm-3">Choose File:</label>
					<div class="col-sm-9">
					<input class="form-control" type="file" name="photo">
					</div>
					</div>
					<div class="row" style="height:5px"></div>
				<div class="row">
					<div class="col-sm-3">
						<label>Name:-</label>
					</div>
					<div class="col-sm-9">
					  <select name="name" class="form-control" required="required" id="nam">
						<option>Select Name</option>
					<?php
					   include("database.php");
					   $rs=mysql_query("select * from student");
					   while($r=mysql_fetch_array($rs)){
						   
					?>
					
						<option value="<?=$r[2]?>"><?=$r[2]?></option>
					   <?php } ?>
						</select>
					</div>
				</div>
				<div class="row" style="height:5px"></div>
				<div id="show">   </div>
				<div class="row" style="height:5px"></div>
				<div class="row">
					<div class="col-sm-3">
						<label> Company Name:-</label>
					</div>
					<div class="col-sm-9">
					      <input type="text" name="cname" required="required" placeholder="company name" class="form-control">
					</div>
				</div>
				<div class="row" style="height:5px"></div>
				<div class="row">
					<div class="col-sm-3">
						<label>package:-</label>
					</div>
					<div class="col-sm-9">
					      <input type="number" name="pkg" required="required" placeholder="1000000" class="form-control">
					</div>
				</div>
				<div class="row" style="height:5px"></div>
				
				<div class="row" style="height:5px"></div>
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-8">
				         <input type="submit" class="btn btn-lg btn-success" value="submit">
				   </div>
				   
				</div>
			</form>
			</div>
			<div class="col-sm-2"></div>
			</div>
			<!---->
			</div>
		
		</div>
	</div>	

			<?php
		     }
			?>
   </body>
</html>