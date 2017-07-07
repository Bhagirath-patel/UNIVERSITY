<html>
	<head>
		<title>Login Page</title>
        
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
            <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
            <link href="layout1.css" rel="stylesheet" type="text/css" media="all">
               
	</head>
<body class="w3-amber">

    <div class="container-fluid responsive">
       
            <div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8 w3-center" style="margin:12px;">
				  <img src="img/universitylogo.png" class="rounded" alt=""/>
					</div>
				<div class="col-sm-2"></div>
				</div>
			<div class="row">
                <div class="col-md-6 col-md-offset-3">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title w3-text-pink w3-center"><b> Sign In</b></h3>
                    </div>
                    <div class="panel-body">
                        <form action="check.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                 E-mail:<input class="form-control" type="text" placeholder="E-mail" name="email" required="required">
                                </div>
                                <div class="form-group">
                                Password:<input class="form-control" type="password" placeholder="Password" name="password" required="required">
                                </div>
								<div class="form-group">
								Department:
								<select name="department" class="form-control">
										<option>Select Department</option>
										<option value="vc">Vice Chancellor</option>
			
									<?php
										include("database.php");
										$rs = mysql_query("select * from department");
										while($r=mysql_fetch_array($rs)){
									?>		
											<option value="<?=$r[1]?>"><?=$r[1]?> section</option>
									<?php	
										}
									?>
								</select>
								</div>
                                  <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>          
                 					
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Login"> 
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>

</html>