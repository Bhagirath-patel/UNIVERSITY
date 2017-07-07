<?php
	if($_REQUEST["code"]){
		$code=$_REQUEST["code"];
		
			?>
				<div class="row">
					<label class="col-sm-3">Branch:-</label>
					 <div class="col-sm-6">
					 <select name="branch" class="form-control">
					 <option>Select Branch</option>
					 <option value="no">No Branch</option>
					<?php
					 include("database.php");
					 $rs1 = mysql_query("select * from branch where degree='$code' ");
					 while($r1=mysql_fetch_array($rs1)){
						 
						 ?>
						 <option value="<?=$r1[2]?>"><?=$r1[2]?></option>
					<?php
					 }
					?>	 
					</select>
					</div>
				</div>
				<br>
			<?php	
	}
	?>