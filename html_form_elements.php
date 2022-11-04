<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HTML Form Elements</title>
</head>
<body>
	<form>

		<input type="" name=""> <!-- textbox -->

		<hr>

		<select name="drpCars"> <!-- dropdown list -->
			<option value="Volvo">Volvo</option>
			<option value="Saab">Saab</option>
			<option value="Fiat" selected>Fiat</option>
			<option value="Audi">Audi</option>
			<option value="Toyota">Toyota</option>
			<option value="Mitsubishi">Mitsubishi</option>
			<option value="Honda">Honda</option>
		</select>

		<hr>

		<textarea name="txtPost" rows="10" cols="30"></textarea> <!-- multi line textbox -->

		<hr>

		<button type="button">Click Me!</button> <!-- button -->

		<hr>

		<fieldset><!-- to group related data in a form -->
			<legend>Personal Information:</legend>
			First Name <input type="" name=""><br>
			Last Name  <input type="" name=""><br>
		</fieldset>

		<hr>

		<input type="text" name="dlstBrowsers" list="browsers">
		<datalist id="browsers">
			<option value="Microsoft Edge">
			<option value="Mozilla Firefox">
			<option value="Google Chrome">
			<option value="Opera">
			<option value="Safari">
			</option>
		</datalist>


		

	</form>

</body>
</html>