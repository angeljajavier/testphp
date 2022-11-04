<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 

/* 

--------------	LADERRIZE IF--------------------

	$grade = 80;

	if($grade > 100)
		echo 'Out of Range!';

	elseif($grade > 74.4) 
		echo 'Passed!';

	elseif($grade > 64.4)
		echo 'Failed';

	else
		echo 'Out of Range';

*/

/*
---------------NESTED IF---------------

	$sex = 'female';
	$age = 18;

	if($sex == 'female'){
		if( $age == 18 )
			echo 'Debutant';
		else
			echo 'Not Debutant';

	}
	elseif($sex == 'male'){
		if( $age == 21 )
			echo 'Debutant';
		else
			echo 'Not Debutant';
	}
*/

/*

---------LADDERIZE IF WITH LOGICAL OPERATOR----

	$sex = 'male';
	$age = 21;

	if($sex == 'female' && $age == 18)
		echo 'Debutant';
	elseif($sex == 'male' && $age ==21)
		echo 'Debutant';
	else
		echo 'Not Debutant';

*/


		$colorCode = 'y';
/*

		if(strtoupper($colorCode) == 'R')
			echo 'Red';
		elseif(strtoupper($colorCode) == 'G')
			echo 'Green';
		elseif(strtoupper($colorCode) == 'B')
			echo 'Blue';
		elseif(strtoupper($colorCode) == 'Y')
			echo 'Yellow';
		else
			echo 'Unknown Color';

*/

			switch (strtoupper($colorCode)) {
				case 'R':
					echo 'Red';
					break;
				case 'G':
					echo 'Green';
					break;
				case 'B':
					echo 'Blue';
					break;
				case 'Y':
					echo 'Yellow';
					break;
				default:
					echo 'Unknown Color';
				
			}





	 ?>
	


</body>
</html>