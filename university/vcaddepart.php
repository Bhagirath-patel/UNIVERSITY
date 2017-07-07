<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Vice Chancellor add Department</title>
		  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
            
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
            <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
           <script src="jquery.js"></script>
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
		 
		 <script type="text/javascript">
	$(document).ready(function(){
		$("#control").change(function(){
			var v=$("#control").val();
			$.post(
			"email.php",
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
					<br><a href="#" class="fa fa-home"><b class="w3-text-Black" data-toggle="dropdown"><a href="vc.php">HOME </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>
					
				  </div>
				  
			     <br><br><a href="vcdepart.php" class="fa fa-file-text" aria-hidden="true" style="text-decoration:none">
						  <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp; Department </b></a>
				 <br><br><a href="vcaddemp.php" class="fa fa-file-excel-o" aria-hidden="true" style="text-decoration:none">
				          <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp; Add Employee </b></a>
				 <br><br><a href="vcallemp.php" class="fa fa-file-excel-o" aria-hidden="true" style="text-decoration:none">
				          <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp; All Employee </b></a>
				 <br><br><a href="vcaddclg.php" class="fa fa-file-excel-o" aria-hidden="true" style="text-decoration:none">
						  <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp; Add College </b></a>
				<br><br><a href="vcallclg.php" class="fa fa-file-excel-o" aria-hidden="true" style="text-decoration:none">
				          <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp; All College </b></a>
	            <br><br><a href="vcaddgalary.php" class="fa fa-book" aria-hidden="true" style="text-decoration:none">
				          <b class="w3-text-Black" style="font-size:20px">&nbsp;&nbsp;&nbsp; Add galary</b></a>					  
	</div>
			
	 <div class="col-sm-10">
	   <div class="row"  style="height:15px"></div>
		<div class="row">
		 <div class="col-sm-2"></div>
           <div class="col-sm-8 w3-card-12 w3-border">			
			<form action="vcaddepartreg.php" method="post">
				<div class="row"  style="height:15px"></div>
				
				<div class="row">
					<div class="col-sm-2">
						<label><b>Department:-</b></label>
					</div>
					<div class="col-sm-10">
						<input type="text" name="department" placeholder="Name" class="form-control">
					</div>
				</div>
				<div class="row" style="height:5px"></div>
				<div class="row">
					<div class="col-sm-2">
					      <label><b>Controller:-</b></label>
					</div>
					<div class="col-sm-10">
					     <select name="controller" id="control" class="form-control">
						    <option>Select Employee</option>
						    <?php
							   include("database.php");
							  $r=mysql_query("select * from employee where department='employee'");
							  while($rs=mysql_fetch_array($r)){
								  $c=$rs[1];
							?>
							
							<option value="<?=$rs[1]?>"><?=$rs[1]?></option>
							<?php 
							} 
							?>
						</select>
					</div>
				</div>
				<div class="row" style="height:5px"></div>
				
				<div id="show"></div>  <!-- Add Show E-mail -->
				
				<div class="row" style="height:5px"></div>
				<div class="row">
					<div class="col-sm-2">
					      <label><b>Parent:-</b></label>
					</div>
					<div class="col-sm-10">
					      <select name="parent" class="form-control">
						   <option>parent</option>
						   <option>child</option>
						   </select>
					</div>
				</div>
				<div class="row" style="height:5px"></div>
				<div class="row">
					<div class="col-sm-2">
						<label><b>Contact:-</b></label>
					</div>
					<div class="col-sm-10">
					      <input type="number" name="contact" class="form-control">
					</div>
				</div>
				<div class="row" style="height:5px"></div>
				
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
				         <input type="submit" class="btn btn-lg btn-sucess" value="submit">
				   </div>
				   <div class="col-sm-4"></div>
				</div>
			</form>
			</div>
			<div class="col-sm-2"></div>
			</div>
			</div>
		</div>
	</div>	

			<?php
		     }
			?>
   </body>
</html>