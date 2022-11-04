<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>XSS DEMO</title>
</head>
<body>

	<form method="post">
		<input type="text" name="txtName">
		<input type="submit" name="btnSend" value="Send">
	</form>


	<?php 
		if (isset($_POST['btnSend'])) {
			echo $_POST['txtName'];
		}




	 ?>

</body>
</html>