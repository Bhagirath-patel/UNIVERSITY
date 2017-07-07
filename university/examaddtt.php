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
		  <script src="jquery.js"></script>
		 
		 <script type="text/javascript">
	$(document).ready(function(){
		$("#degree").change(function(){
			var v=$("#degree").val();
			$.post(
			"sem2.php",
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
				<br><i class="fa fa-home" aria-hidden="true"><b>&nbsp;&nbsp;<a href="exam.php"><b>HOME</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right"></i></a></i>
				  </div>
				  
			    <br><br><a href="#" class="fa fa-file-text" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;All Member</b></a>
				<br><br><a href="examaddmember.php" class="fa fa-file-excel-o" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;Add Member</b></a>
				<br><br><a href="examaddtt.php" class="fa fa-file-excel-o" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;Time-Table</b></a>
				<br><br><a href="eaxmaddrst.php" class="fa fa-file-excel-o" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;Add Result</b></a>
				<br><br><a href="allresult.php" class="fa fa-file-excel-o" aria-hidden="true" style="text-decoration:none">
				        <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp;show Result</b></a>
			    
	</div>
			
			<div class="col-sm-10">
				
				<div class="well well-sm w3-text-red" align="center">
				<?php
					if(isset($_GET["succ"])){
						echo "successfully file added";
					}
					if(isset($_GET["dlt"])){
						echo "file not added";
					}
				?>
				</div>
			<form enctype="multipart/form-data" action="addtimetable.php" method="POST">
			<div class="row">
			    <div class="col-sm-3">
					<labe>Degree:</label>
				</div>
					<div class="col-sm-6">
					<select class="form-control" name="degree" id="degree">
					<option>Select Degree</option>
					<?php
					include("database.php");
					$rs=mysql_query("select * from degree_section");
					while($r=mysql_fetch_array($rs)){
						$c=$r[1];
						?>
						<option value="<?=$r[1]?>"><?=$r[1]?></option>
						<?php
					}
					?>
					</select>
					</div>
			</div>
					<br>
			<div id="show">
					
					</div>
			 <?php /*Email<input type="email" name="email" required="required" /><br />*/ ?>
			<div class="row">
			<label class="col-sm-3">Choose File:</label>
			<div class="col-sm-6">
			<input class="form-control" type="file" name="photo">
			</div>
			</div>
			<br>
			<div align="center">
			<button class="btn btn-success">Upload File</button>
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