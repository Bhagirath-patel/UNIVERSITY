<html>
	<head>
		<title>University</title>    
		
		<!--   CSS File Add  -->
		
		    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
            
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
            <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
         
		<!-- java Script -->
		
		
		<!-- Style -->
			<style>
                        .carousel-inner > .item > img,
                        .carousel-inner > .item > a > img {
                            width: 100%;
                            height: 75%;
                            
                       }
					   
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
			<style>
					#firsts,#seconds,#thirds,#fourths{
						
						display:none;
					}
			</style>
			<script src="jquery.js"></script>
			<script type="text/javascript">
			      function change(v){
					  var s=v+"s";
					 document.getElementById("main").innerHTML=document.getElementById(s).innerHTML;
				  }
			
			</script>
	</head>

	<body>
	  <div class="container-fluid" >
		  <div class="responsive" >
		 
		  
		  <div class="row" style="background-color:darkslateblue; position:fixed; z-index:21212">
		   <div class="row" style="height:5px"></div>
		    <div class="col-sm-2"><img src="oxford.png" class="img-responsive" >
			<div class="row" style="height:25px"></div>
			</div>
			<div class="col-sm-6">
			<div class="row" style="height:25px"></div>
			<ul class="w3-navbar w3-text-white" style="background-color:darkslateblue; font-Size:20px">
				<li> <a href="university.php" class="w3-border-right w3-border-black">HOME</a> </li>
				
				  <li class="w3-dropdown-hover w3-border-right w3-border-black">
					<a href="#">ABOUT US &nbsp; <i class="fa fa-caret-down"></i></a>
					<div class="w3-dropdown-content w3-brown w3-card-4 w3-border-bottom w3-border-white">
					  <a href="vicechancellor.php">Vice Chancellor</a>
					 
					  <a href="college.php">College</a>
					  
					  <a href="visionmision.php">Vision and Mission</a>
					  <a href="history.php">History</a>
					  <a href="antirangging.pdf">Anti Rangging Center</a>
					</div>
				  </li>
				  <!-- <li class="w3-dropdown-hover w3-border-right w3-border-black">
					<a href="#">ACADEMICS &nbsp; <i class="fa fa-caret-down"></i></a>
					<div class="w3-dropdown-content w3-brown w3-card-4 w3-border-bottom w3-border-white">
					  <a href="academiccenter.php">Academics Center</a>
					  <a href="library.php">Library</a>
					  <a href="bookbank.php">Book-Bank</a>
					  <a href="sports.php">Sports club</a>
					</div>
				  </li>  -->
				  <li class="w3-dropdown-hover w3-border-right w3-border-black">
					<a href="#">ADMISSION &nbsp; <i class="fa fa-caret-down"></i></a>
					<div class="w3-dropdown-content w3-brown w3-card-4 w3-border-bottom w3-border-white">
					  <a href="admission.php">Undergraduates</a>
					  <a href="admission.php">Postgraduates</a>
					  <a href="admission.php">B.S.C.</a>
					  <a href="admission.php">M.S.C.</a>
					  <a href="admission.php">P.H.D.</a>
					 
					</div>
				  </li>
				 </ul>
			</div>
			<div class="col-sm-4">
			
			<div class="row" style="height:25px"></div>
			<div class="row" style="height:30px"> 
				<div class="col-sm-3 w3-black" id="clg">
							<a href="college.php"  style="font-Size:20px; text-decoration:none" class="w3-border-right w3-border-white">College&nbsp;&nbsp;</a>	
				</div>
				<div class="col-sm-4 w3-black">
							<a href="department.php"  style="font-Size:20px; text-decoration:none" class="w3-border-right w3-border-white">Department&nbsp;</a>	
				</div>
				<div class="col-sm-4 w3-black">
							<a href="contact.php"  style="font-Size:20px; text-decoration:none">contact &nbsp;<i class="fa fa-phone"></i></a>
				</div>
			</div>
			<div class="row" style="height:25px"></div>
			<div class="row">
			<ul class="w3-navbar w3-text-white" style="background-color:darkslateblue; font-Size:12px">
				  <li><a href="swc.php">SWC</a></li>
				  <li class="w3-dropdown-hover">
					<a href="#">EXAMINATION</a>
					<div class="w3-dropdown-content w3-brown w3-card-4 w3-border-bottom w3-border-white">
					  <a href="#">Exmination Notice</a>
					  <a href="syllabus.php">Syllabus</a>
					  <a href="timetable.php">Time-Table</a>
					  <a href="result.php">Result</a>
					  <a href="#">Exmination Center</a>
					</div>
				  </li>
				  <li class="w3-dropdown-hover">
					<a href="placement.php">PLACEMENT</a>
					<div class="w3-dropdown-content w3-brown w3-card-4 w3-border-bottom w3-border-white">
					  <a href="placement.php">Dreams Offer</a>
					  <a href="placement.php">Placement Records</a>
					  <a href="placement.php">PAT Center</a>
					  <a href="placement.php">Placement Consortium</a>
					</div>
				  </li>
				  <li class="w3-dropdown-hover">
					<a href="research.php">RESEARCH</a>
					<div class="w3-dropdown-content w3-brown w3-card-4 w3-border-bottom w3-border-white">
					  <a href="research.php">Academics Research</a>
					  <a href="research.php">Research Center</a>
					  <a href="research.php">Sponsored Research</a>
					  <a href="research.php">International Research</a>
					</div>
				  </li>
				
				 
				  
				</ul>
				</div>
			</div>
		  
		</div>
		  <div class="row" style="height:150px"></div>
		  <div class="row" style="height:20px"></div>
      	 <div class="row">
		   <div class="col-sm-4"></div>
		   <div class="col-sm-4 w3-center w3-border-bottom w3-border-pink "><b  style="font-Size:25px;">Contact</b ></div>
		   <div class="col-sm-4"></div>
		</div>
	<div class="row" style="height:15px"></div>
	  <div class="row"> 
	    <?php
	 include("database.php");
	 $rs=mysql_query("select * from department");
	 while($r=mysql_fetch_array($rs)){
		 $c=$r[1];
		 $rs1=mysql_query("select * from employee where department='$c' ");
		 ?>
		 <div class="row w3-border-bottom w3-center"><br>

		 <h2><b class="w3-text-pink"> &nbsp&nbsp&nbsp;<?=$c?> section</b></h2>
		 
		 </div>
		 <br>
		 <div class="row">
		 <?php
		 while($r1=mysql_fetch_array($rs1)){
			 ?>
			 
				<div class="col-sm-4">
				<div class="w3-card-4">
			 <div class="panel panel-body">
				<div class="col-sm-5">
					<img src="user.jpg" class="img-responsive w3-bordered">
					</div>
					<div class="col-sm-7 w3-border-bottom w3-border-red">
						<label>Name:</label> <?=$r1[1]?><br>
						<label>Email:</label> <?=$r1[2]?><br>
						<label>Contact:</label> <?=$r1[5]?><br><br>
						
					</div>
				</div>
				</div>
				</div>
			 <?php
		 }
		 ?>
		 </div>
	<br><br>
		 <?php
	 }
	
 $rs2=mysql_query("select * from employee where department='employee' ");
		 ?>
		 <div class="row w3-border-bottom w3-border-grey" align="center"><br>

		 <h2><b class="w3-text-shadow w3-text-green"> &nbsp&nbsp&nbsp;employee section</b></h2>
		 
		 </div>
		 <br>
		 <div class="row">
		 <?php
		 while($r2=mysql_fetch_array($rs2)){
			 ?>
				
				<div class="col-sm-4">
				<div class="w3-card-4">
			 <div class="panel panel-body">
				<div class="col-sm-5">
					<img src="user.jpg" class="img-responsive w3-bordered">
					</div>
					<div class="col-sm-7 w3-border-bottom w3-border-red">
						<label>Name:</label> <?=$r2[1]?><br>
						<label>Email:</label> <?=$r2[2]?><br>
						<label>Contact:</label> <?=$r2[5]?><br><br>
						
					</div>
				</div>
				</div>
				</div>
			 <?php
		 }
		 ?>
	  
	   </div>
	<div class="row" style="height:50px"></div>
	<div class="row">
		 <div class="col-sm-1"></div>
		    <div class="row w3-border-bottom w3-border-red">
			 <b> <i class="fa fa-plus-square-o" aria-hidden="true" style="font-Size:25px"></i></b><b class="w3-border-red  w3-text-pink" style="font-Size:25px">&nbsp;&nbsp;&nbsp;Study Classroom</b>
			</div>
		</div>
		<br>
		  
		   <div class="row">
			<div class="col-sm-3 w3-card-12">
				<img src="images/classroom/c1.jpg" class="img-responsive img-rounded">
				<div class="row" style="height:3px"></div>
				<div class="container"><b>Better classroom for study</b><br><br></div>
			</div>
			<div class="col-sm-3 w3-card-12">
				<img src="images/classroom/c2.jpg" class="img-responsive img-rounded">
				<div class="row" style="height:3px"></div>
				<div class="container"><b>Upper Standard Study</b><br>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;& Best Faculty</b><br></div>
			</div>
			<div class="col-sm-3 w3-card-12">
				<img src="images/classroom/c3.jpg" class="img-responsive img-rounded">
				<div class="row" style="height:3px"></div>
				<div class="container"><b>Projecter Classroom </b><br><br></div>
		    </div>
			<div class="col-sm-3 w3-card-12">
				<img src="images/classroom/c4.jpg" class="img-responsive img-rounded">
				<div class="row" style="height:3px"></div>
				<div class="container"><b>Better laboratry And Equipment</b><br><br></div>
				
			</div>
		    </div>
			
  <div class="row" style="height:20px"></div>
	
      <div class="row" style="height:15px"></div>
	  <div class="row w3-black" >
	        <div class="col-sm-1"></div>
			<div class="col-sm-3 w3-card-12 well-lg">
			
			 <div class="row" style="height:11px"></div>
			 <div class="row w3-center">
			 <b class=" w3-text-white w3-text-shadow" style="font-Size:20px">Study At IIT</b>
			</div>	
			<div class="row" style="height:5px"></div>
			<div class="row w3-center">
			 <a href="#" style="">Undergraduates</a><br>
			 <a href="#" style="">Undergraduates</a><br>
			 <a href="#" style="">Postgraduates</a><br>
			 <a href="#" style="">Phd</a><br>
			 <a href="#" style="">MBA</a><br>
			 <a href="#" style="">About College</a><br>
			</div>
			</div>
			<div class="col-sm-4">
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-8">
					  
					 <div class="row" style="height:5px"></div>
					 
					 <div class="row" style="height:35px"></div>
					 <p class="w3-center" style="font-Size:20px">IIT University<br>
					           Jodhpur Rajasthan India<br>
						 <b style="text-decoration:underline">Contact</b>:-&nbsp;&nbsp;9783829865<br>
						 <b style="text-decoration:underline">E-mail</b>:-&nbsp;&nbsp;iitu@gmail.com<br>
					</div>
					<div class="col-sm-2"></div>
				</div>
			</div>
			<div class="col-sm-4">
			    <div class="row" style="height:25px"></div>
				<div class="row w3-center w3-text-white w3-text-shadow">
				<b style="font-Size:20px">Student Wel-fare Center</b>
			    </div>
				<div class="row" style="height:5px"></div>
			<div class="row w3-center">
			 <a href="#" style="">Undergraduates</a><br>
			 <a href="#" style="">Undergraduates</a><br>
			 <a href="#" style="">Postgraduates</a><br>
			 <a href="#" style="">Phd</a><br>
			 <a href="#" style="">MBA</a><br>
			 <a href="#" style="">About College</a><br>
			</div>
			</div>
	  
	  </div>
	
	<div class="row  w3-border-bottom w3-border-pink ">
	<div class="row w3-black  w3-center" style="height:30px">
			<div class="row" style="height:2px"></div>
		   <i class="w3-text-white"> copy right by:-@Bhagirath Patel from Acme Embedded Technologies Pvt. Ltd.</i>
		</div>
		 </div>
	</div>
		    </div>
	</body>
</html>