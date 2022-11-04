<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>url-encoding-page-2-demo.php</title>
</head>
<body>
	
	<?php 
	Welcome Back

	if ($_GET['sex'] == 'Male') 
		echo 'Sir' . $_GET['fname'] . ' ' . $_GET['lname'];
	else
		echo 'Maam' . $_GET['fname'] . ' ' . $_GET['lname'];
	?>
</body>
</html>