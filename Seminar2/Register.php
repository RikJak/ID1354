<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset = "utf-8">
    <title>Tasty Recipes!</title>
    <link rel="shortcut icon" type="image/png" href="bin/favicon.png"/>
    <link rel="stylesheet" type="text/css" href = "css/reset.css">
    <link rel="stylesheet" type="text/css" href = "css/menu.css">
    <link rel="stylesheet" type="text/css" href = "css/general.css">
    <link rel="stylesheet" type="text/css" href = "css/login.css">
</head>

<body>
<?php include 'Menu.php';?>
<h2>Register new user</h2>

<form action="RegisterUser.php" method="post">
    <div class="imgcontainer">
        <img src="bin/chef.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Desired Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Desired Password" name="psw" required>

        <button type="submit">Submit</button>

    </div>

    <div class="container" id="bottom">
        <button type="button" class="cancelbtn" onclick="location.href='index.php'">Cancel</button>
    </div>
</form>

</body>
</html>

