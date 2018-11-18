<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset = "utf-8">
    <title>Tasty Recipes!</title>
    <link rel="shortcut icon" type="image/png" href="bin/favicon.png"/>
    <link rel="stylesheet" type="text/css" href = "css/reset.css">
    <link rel="stylesheet" type="text/css" href = "css/menu.css">
    <link rel="stylesheet" type="text/css" href = "css/general.css">
    <link rel="stylesheet" type="text/css" href = "css/logOut.css">
</head>

<body>
<?php include 'Menu.php'?>

<h2>Hello <?php $_SESSION['username']?>!</h2>
<div id = "calendarButton">
				<button class="button" onclick="location.href='ClearLoggedInUser.php'">Log out!</button>
 </div>

</body>