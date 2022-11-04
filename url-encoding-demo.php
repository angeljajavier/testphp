<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>URL Encoding Demo</title>
</head>
<body>

	<?php 

		$firstname = urlencode('Raechel and Friends');
		$lastname = urlencode("Capiz");
		$sex = urlencode('Female');

	 ?>

	<a href="url-encoding-page-2-demo.php?fname=<?php echo $firstname; ?>&lname=<?php echo	$lastname ?>&sex=<?php echo $sex;  ?> Click Me Baby one more time</a>

</body>
</html>