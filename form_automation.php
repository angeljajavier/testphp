<?php

	$arrMonths = array('January', 'February','March','April','May','June','July','August','September','October','November','December');


?>


<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Automation</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
					<select name="drpMonths" class="form-control">

						<?php 

							if (isset($arrMonths)) {
								foreach($arrMonths as $key => $value){


									if ($value == date('F'))
										echo '<option value="' . $value . '" selected>' . $value . '</option>';
									else
										echo '<option value="' . $value . '">' . $value . '</option>';
								}
							}
						?>

					</select>

					<select name="drpDays" class="form-control">
						<?php

							for ($i=1; $i < 32; $i++) 
								if ($i == date('d'))
							  		echo '<option value="' . $i . '" selected>' . $i . '</option>';
							  	else
							  		echo '<option value="' . $i . '">' . $i . '</option>';
							    
						?>	
					</select>

					<button type="submit" class="btn btn-primary"><i class="fa fa-cog"></i>Process</button>
					


							

			</div>
		</div>	
	</div>
	


	<script type="text/javascript" href="js/jquey-3.5.1.js"></script>
	<script type="text/javascript" href="js/bootstrap.js"></script>

</body>
</html>