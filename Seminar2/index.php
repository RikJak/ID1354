<!DOCTYPE html>
	<html lang ="en">
	<head>
		<meta charset = "utf-8">
		<title>Tasty Recipes!</title>
		<link rel="shortcut icon" type="image/png" href="bin/favicon.png"/>
		<link rel="stylesheet" type="text/css" href = "css/reset.css">
		<link rel="stylesheet" type="text/css" href = "css/menu.css">
		<link rel="stylesheet" type="text/css" href = "css/general.css">
		<link rel="stylesheet" type="text/css" href = "css/index.css">
	</head>

	<body>
       <?php include 'Menu.php';?>
		<div class = "container">

			<div id = "promo">
				<h1>Click the button to find a calendar containing delicious recipes!</h1>


			</div>
			<div id = "calendarButton">
				<button class="button" onclick="location.href='calendar.php'" >Go to calendar</button>
			</div>
			<div id = "delicious">
			</div>
			<div id="sneaky">
				<p>Why are you even looking here? How did you find me??</p>

			</div>

		</div>


	</body>

