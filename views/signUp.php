<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset = "utf-8">
    <title>Tasty Recipes!</title>
    <link rel="shortcut icon" type="image/png" href="../resources/bin/favicon.png"/>
    <link rel="stylesheet" type="text/css" href = "../resources/css/reset.css">
    <link rel="stylesheet" type="text/css" href = "../resources/css/menu.css">
    <link rel="stylesheet" type="text/css" href = "../resources/css/general.css">
    <link rel="stylesheet" type="text/css" href = "../resources/css/login.css">
    <?php include RecipesWebsite\Util\Constants::getViewFragmentsDir().'header.php';?>
</head>

<body>
<?php include 'Menu.php';?>
<h2>Register new user</h2>

<form action="Signup" method="post">
    <div class="imgcontainer">
        <img src="../resources/bin/chef.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Desired Username" name="username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Desired Password" name="password" required>

        <button type="submit">Submit</button>

    </div>

    <div class="container" id="bottom">
        <button type="button" class="cancelbtn" onclick="location.href='index'">Cancel</button>
    </div>
</form>

</body>
</html>

