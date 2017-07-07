<?php
	if($_REQUEST["code"]){
		$code=$_REQUEST["code"];
		
			?>
				<div class="row">
					<label class="col-sm-3">Fname:-</label>
					 <div class="col-sm-9">
					
					<?php
					 include("database.php");
					 $rs1 = mysql_query("select * from student where name='$code' ")or die(mysql_error());
					 while($r1=mysql_fetch_array($rs1)){
						 
						 ?>
						 <input type="text" name="fname" value="<?=$r1[3]?>" class="form-control">
					<?php
					 }
					?>	 
					</select>
					</div>
				</div>
				<div class="row" style="height:5px"></div>
			<?php	
	}
	?>