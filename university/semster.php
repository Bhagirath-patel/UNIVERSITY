<?php
	if($_REQUEST["code"]){
		$code=$_REQUEST["code"];
		if($code=="yes"){
			?>
			<div class="row">
				<div class="col-sm-3">
				<label >Number of Semester</label>
				</div>
				<div class="col-sm-9">
				<select name="sem1" class="form-control">
					<option>Select semester</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
				</select>	
				</div>
			</div>
			<div class="row" style="height:10px"></div>
		
		<?php
		}	
         else{
			 
		 }		
	}
	?>