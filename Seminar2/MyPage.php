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
<?php if(isset($_SESSION['creationSuccess'])){
    echo '<h2>You have succefully created an account, '.$_SESSION['username'].'!</h2>';
    unset($_SESSION['creationSuccess']);
}else{
    echo '<h2>Welcome back '.$_SESSION['username'].'!</h2>
<div class="container">
    <div id = "LogOutButton">
        <button class="button" onclick='."location.href='ClearLoggedInUser.php'".'>Log out!</button>
    </div>
</div>';
}?>
</body>