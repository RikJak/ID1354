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
    <script type="text/javascript" src="<?php echo RecipesWebsite\Util\Constants::getJsDir()?>Logout.js"></script>
</head>

<body>
<?php include 'Menu.php'?>


<h2 id = "welcome">Welcome back '.$username.'!</h2>
<div class="container">
    <div id = "LogOutButton">
        <button id="logout" class="button"  data-bind="click: logout">Log out!</button>
    </div>
</div>


</body>