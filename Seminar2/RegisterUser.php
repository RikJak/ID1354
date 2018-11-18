<?php
/**
 * Created by PhpStorm.
 * User: Rikard
 * Date: 2018-11-17
 * Time: 12:43
 */

session_start();
$servername = "localhost:3306";
$username = "root";
$password = "Rikard";
$userPass = $_POST['psw'];
$userName = $_POST['uname'];
$match = false;
$_SESSION['creationSuccess']=false;

try {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO users(Username, Password)
    VALUES ('$userName', '$userPass')";
        // use exec() because no results are returned
        $conn->exec($sql);

        $_SESSION['creationSuccess']=true;
        $_SESSION['username']= $userName;
        header("Location: MyPage.php");
    }
    catch(PDOException $e)
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>