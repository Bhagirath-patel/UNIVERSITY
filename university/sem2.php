<?php

	if($_REQUEST["code"]){
		$code=$_REQUEST["code"];
		
			?>
			<div class="row"style="height:10px"></div>
			<div class="row">
			<div class="col-sm-3">
			<label >Branch:</label>
			</div>
			<div class="col-sm-6">
				<select name="branch" class="form-control">
					<option>select branch</option>
					<?php
						include("database.php");
						$rs=mysql_query("select * from branch where degree='$code' ");
						while($r=mysql_fetch_array($rs)){
							?>
							<option value="<?=$r[2]?>"><?=$r[2]?></option>
							<?php
						}
					?>
				</select>
			</div>
			</div>
			<div class="row"style="height:10px"></div>
			
		<?php
			
	}
	?>