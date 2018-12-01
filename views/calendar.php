<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset = "utf-8">
	<title>Tasty Recipes!</title>
	<link rel="shortcut icon" type="image/png" href="../resources/bin/favicon.png"/>
	<link rel="stylesheet" type="text/css" href = "../resources/css/reset.css">
	<link rel="stylesheet" type="text/css" href = "../resources/css/menu.css">
	<link rel="stylesheet" type="text/css" href = "../resources/css/general.css">
	<link rel="stylesheet" type="text/css" href = "../resources/css/calendar.css">
</head>

<body>
<?php include 'Menu.php';?>
	<div id = "title">
		<h1>Food calendar!</h1>
	</div>
	<div id = "grid">
		<ul id="weekdays">
			<li>Monday</li>
			<li>Tuesday</li>
			<li>Wednesday</li>
			<li>Thursday</li>
			<li>Friday</li>
			<li class = "weekend">Saturday</li>
			<li class = "weekend">Sunday</li>
		</ul>
		<div id  = "calendar">
			<a class = "day" >	1	</a>
			<a class = "day" >	2	</a>
			<a class = "day" >	3	</a>
			<a class = "day" >	4	</a>
			<a class = "day" >	5	</a>
			<a class = "day" >	6	</a>
			<a class = "day" >	7	</a>
			<a class = "day" >	8	</a>
			<a class = "day" >	9	</a>
			<a class = "day" >	10	</a>
			<a class = "day" >	11	</a>
			<a class = "day" >	12	</a>
			<a class = "day" >	13	</a>
			<a class = "day" >	14	</a>
			<a class = "day" >	15	</a>
			<a class = "day" >	16	</a>
			<a class = "day" >	17	</a>
			<a class = "day" >	18	</a>
			<a class = "day" >	19	</a>
			<a class = "day" >	20	</a>
			<a class = "day" href="pancakes">	21	<div class = "imgContainer"><img src ="../resources/bin/pancakes.png" alt="An image of some pancakes covered in ketchup"></div></a>
			<a class = "day" >	22	</a>
			<a class = "day" >	23	</a>
			<a class = "day" >	24	</a>
			<a class = "day" >	25	</a>
			<a class = "day" >	26	</a>
			<a class = "day" >	27	</a>
			<a class = "day" href="meatballs">	28	<div class = "imgContainer"><img src ="../resources/bin/meatballs.png" alt="An image of some tasty looking meatballs"></div></a>
			<a class = "day" >	29	</a>
			<a class = "day" >	30	</a>
		</div>
	</div>
</body>