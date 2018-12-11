<!DOCTYPE html>
	<html lang ="en">
	<head>
		<meta charset = "utf-8">
		<title>Tasty Recipes!</title>
		<link rel="shortcut icon" type="image/png" href="../resources/bin/favicon.png"/>
		<link rel="stylesheet" type="text/css" href = "../resources/css/reset.css">
		<link rel="stylesheet" type="text/css" href = "../resources/css/menu.css">
		<link rel="stylesheet" type="text/css" href = "../resources/css/general.css">
		<link rel="stylesheet" type="text/css" href = "../resources/css/index.css">
        <?php include RecipesWebsite\Util\Constants::getViewFragmentsDir().'header.php';?>
	</head>

	<body>
       <?php include 'Menu.php';?>
		<div class = "container">

			<div id = "promo">
				<h1>Click the button to find a calendar containing delicious recipes!</h1>


			</div>
			<div id = "calendarButton">
				<button class="button" onclick="location.href='calendar'" >Go to calendar</button>
			</div>
			<div id = "delicious">
			</div>
			<div id="sneaky">
				<p>Why are you even looking here? How did you find me??</p>

			</div>

		</div>


	</body>

