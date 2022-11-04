<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Types Demo</title>
</head>
<body>

	<form>
		<label for="txtFirstName">First Name:</label>
		<input type="text" name="txtFirstName" id="txtFirstName" required><br>
		<label for="txtLastName">Last Name:</label>
		<input type="text" name="txtLastName" id="txtLastName" required> <br>


		<label for="txtPassword">Password:</label>
		<input type="password" name="txtPassword" id="txtPassword" required > <br>


		<input type="submit" name="btnSave1" value="Send">
		<!--<button type="submit" name="btnSave2"><i>Send II</button>-->


		<input type="reset" name=""> <br>


		<input type="radio" name="radSex" id="radMale" value="Male">
		<label for="radFemale">Male</label><br>
		<input type="radio" name="radSex" id="radFemale" value="Female">
		<label for="radFemale">Female</label><br>

		<input type="checkbox" name="chkBike" id="chkBike" value="Bike">
		<label for="chkBike">I have a Bike.</label><br>
		<input type="checkbox" name="chkCar" id="chkCar" value="Car" checked>
		<label for="chkCar">I have a Car.</label><br>
		<input type="checkbox" name="chkBoat" id="chkBoat" value="Boat" disabled>
		<label for="chkBoat">I have a Boat.</label><br>

		<label for="clrTheme">Pick a color:</label>
		<input type="color" name="clrTheme" id="clrTheme"><br>

		<label for="dtpBirthday">Birthday:</label>
		<input type="date" name="dtpBirthday" id="dtpBirthday" value="2000-01-01"> <br>

		<label for="txtEmail">Email Address:</label>
		<input type="email" name="txtEmail" id="txtEmail"><br>

		<label for="filPhoto">Select a File:</label>
		<input type="file" name="filPhoto" id="filPhoto" > <br>

		<label for="txtNumber">Enter Quantity:</label>
		<input type="number" name="txtNumber" id="txtNumber" min="1" max="5"><br>

		<label for="txtVolume">Select Volume:</label>
		<input type="range" name="txtVolume" id="txtVolume" min="0" max="50" step="10"><br>

		<label for="txtTelephone">Enter Telephone Number:</label>
		<input type="tel" name="txtTelephone" id="txtTelephone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" maxlength="11"><br>

		<label for="txtTime">Select Time:</label>
		<input type="time" name="txtTime" id="txtTime"><br>

		<label for="txtURL">Add URL:</label>
		<input type="url" name="txtURL" id="txtURL"><br>




	</form>




</body>
</html>