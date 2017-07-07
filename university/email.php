<?php
 if($_REQUEST["code"]){
	 $code=$_REQUEST["code"];
	 include("database.php");
	 $rs = mysql_query("select * from employee where name='$code' ");
	 while($r=mysql_fetch_array($rs)){
		 ?>
		 <div class="row">
		 <div class="col-sm-2">
		 <label>
		 E-mail:-
		 </label>
		 </div>
		 <div class="col-sm-10">
		 <input class="form-control" type="email" name="email" value="<?=$r[2]?>">
        </div>
        </div>
		<div class="row">
		 <div class="col-sm-2">
		 <label>
		 Password:-
		 </label>
		 </div>
		 <div class="col-sm-10">
		 <input class="form-control" type="password" name="password" value="<?=$r[3]?>">
        </div>
        </div>
      		
		<?php
	 }
 }
?>