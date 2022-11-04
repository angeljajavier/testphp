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
//------------------------INDEX ARRAYS
	//3 DIFFERENT WAYS TO DECLARE AND CREATE AN ARRAY IN PHP

		$color = array("Red", "Green", "Blue");
		echo $color[0];

		$pet = ["Dog", "Cat", "Pig", "Hamster"];
		echo $pet[2];

		$country[0] = "Philippines";
		$country[1] = "Japan";
		$country[2] = "Korea";
		$country[3] = "Russia";
		$country[4] = "UAE";
		echo $country[1];
*/
/*

//-----------------------ASSOCIATIVE ARRAYS 

		$ages = array("Peter" =>  22, "Clark" => 32, "John" => 28);
		echo $ages['Peter'];

		//MAKE A MULTIDIMENSIONAL ARRAY USING THIS
		$size = ['sm' => 10, 'md' => 14, 'lg' => 20];
		echo $size['md']; 

		$student['name'] = "Renmark";
		$student['grade'] = 99;
		$student['age'] = 16;

		echo $student['name'] . ' is '. $student['age'] . ' years old.';
*/

//-----------------------MULTIDIMENSIONAL ARRAYS
/*
		$contacts = array(
			array(
				'name' => 'Peter Parker', 
				'email' => 'peterparker@email.com',
				'sex' => 'Male'
			),

			array(
				 'name' => 'Clark Kent', 
				 'email' => 'clarkkent@email.com',
				 'sex' => 'Male'
			),

			array(
				 'name' => 'Harry Potter', 
				 'email' => 'harrypotter@email.com',
				 'sex' => 'Male'
			),

			array(
				 'name' => 'Katnis Everdeen', 
				 'email' => 'katnisseverdeen@email.com',
				 'sex' => 'Female'
			)

		);

		echo $contacts[1]['email'];
*/
		//PRINT THE ARRAY ON HOW IT LOOKS LIKE

/*

		$ages = array("Peter" =>  22, "Clark" => 32, "John" => 28);
		print_r($ages);
		echo '<br><br>';
		var_dump($ages);
		echo '<br><br>';

		$student['name'] = "Renmark";
		$student['grade'] = 99;
		$student['age'] = 16;
		print_r($student);
		echo '<br><br>';
		var_dump($student);
*/
/*

		//---------------------FOREACH 
		//------PROCESSING INDEXED ARRAYS USING FOREACH
		$color = array("Red", "Green", "Blue");


		/*
		foreach ($color as $key => $value) {
			echo $value . '<br>';
			
		}
		*/

		/*
		//count to know when to stop looping
		//as much as possible please use foreach in arrays and not for like this
		for($i=0; $i < count($color); $i++)
			echo $color[$i] . '<br>';
		*/
/*
		//----PROCESSING ASSOCIATIVE ARRAYS USING FOREACH
		$ages = array("Peter" =>  22, "Clark" => 32, "John" => 28);

		foreach ($ages as $key => $value) {
			echo $key . ' is ' . $value  . ' years old.<br>';
		}
*/
		$contacts = array(
			array(
				'name' => 'Peter Parker', 
				'email' => 'peterparker@email.com',
				'sex' => 'Male'
			),

			array(
				 'name' => 'Clark Kent', 
				 'email' => 'clarkkent@email.com',
				 'sex' => 'Male'
			),

			array(
				 'name' => 'Harry Potter', 
				 'email' => 'harrypotter@email.com',
				 'sex' => 'Male'
			),

			array(
				 'name' => 'Katnis Everdeen', 
				 'email' => 'katnisseverdeen@email.com',
				 'sex' => 'Female'
			)

		);

		foreach ($contacts as $keyContact => $valueContact) {
			foreach $valueContact as $key => $value) {
			echo $value . '<br>';
		}

	}


	 ?>

</body>
</html>