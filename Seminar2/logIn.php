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
<div class = "container">

    <h2>Login Form</h2>

    <form action="PasswordValidation.php" method="post">
        <div class="imgcontainer">
            <img src="bin/chef.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" id="bottom">
            <button type="button" class="cancelbtn" onclick="location.href='index.php'">Cancel</button>

            <button type="button" class="pswbtn" onclick="location.href='register.php'">Don't have an account?</button>
        </div>
    </form>

    <?php
    if (isset($_SESSION['validLogIn'])){
        if(!$_SESSION['validLogIn']){
            echo'    <div class = "error">
        <div class="errorText">
            You\'ve entered the wrong username or password.
        </div>
    </div>
    
    <script type="text/javascript">

        function off() {
            document.getElementById("overlay").style.display = "none";
        }
    </script>';

            unset($_SESSION['validLogIn']);
        }
    }

    ?>
</body>