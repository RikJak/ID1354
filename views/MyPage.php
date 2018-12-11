<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset = "utf-8">
    <title>Tasty Recipes!</title>
    <link rel="shortcut icon" type="image/png" href="../resources/bin/favicon.png"/>
    <link rel="stylesheet" type="text/css" href = "../resources/css/reset.css">
    <link rel="stylesheet" type="text/css" href = "../resources/css/menu.css">
    <link rel="stylesheet" type="text/css" href = "../resources/css/general.css">
    <link rel="stylesheet" type="text/css" href = "../resources/css/logOut.css">
    <?php include RecipesWebsite\Util\Constants::getViewFragmentsDir().'header.php';?>
</head>

<body>
<?php include 'Menu.php'?>
<?php if($creationSuccess){
    echo '<h2>You have succefully created an account, '.$username.'!</h2>';
    unset($_SESSION['creationSuccess']);
}else{
    echo '<h2>Welcome back '.$username.'!</h2>
<div class="container">
    <div id = "LogOutButton">
        <button class="button" onclick='.'"location.href=\'Logout\'"'.'>Log out!</button>
    </div>
</div>';
}?>


</body>