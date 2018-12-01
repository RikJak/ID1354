
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
</head>

<body>
<?php include 'Menu.php';?>
<div class = "container">

    <h2>Login Form</h2>

    <form action="Login" method="post">
        <div class="imgcontainer">
            <img src="../resources/bin/chef.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="text" id="username" placeholder="Enter Username" name="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" id="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" id="bottom">
            <button type="button" class="cancelbtn" onclick="location.href='index'">Cancel</button>

            <button type="button" class="pswbtn" onclick="location.href='Signup'">Don't have an account?</button>
        </div>
    </form>

    <?php
        if(false){
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

        }

    ?>
</body>