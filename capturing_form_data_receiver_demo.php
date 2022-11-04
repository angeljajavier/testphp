<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Data (Received)</title>
</head>
<body>

	<?php 
	/*

		//USE $_GET IF YOU USE GET METHOD ON YOUR FORM

		$firstname = $_GET['txtFirstName'];
		$lastname =  $_GET['txtLastName'];
		$sex = $_GET['radSex'];


		if ($sex == 'Male') 
			echo "Hello, Sir $firstname $lastname";
		else
			echo "Hello, Ma'am $firstname $lastname";
	*/
	/*

		//USE $_POST IF YOU USE POST METHOD ON YOUR FORM

		$firstname = $_POST['txtFirstName'];
		$lastname =  $_POST['txtLastName'];
		$sex = $_POST['radSex'];


		if ($sex == 'Male') 
			echo "Hello, Sir $firstname $lastname";
		else
			echo "Hello, Ma'am $firstname $lastname";
	*/

		$firstname = $_REQUEST['txtFirstName'];
		$lastname =  $_REQUEST['txtLastName'];
		$sex = $_REQUEST['radSex'];


		if ($sex == 'Male') 
			echo "Hello, Sir $firstname $lastname";
		else
			echo "Hello, Ma'am $firstname $lastname";



	?>

</body>
</html>