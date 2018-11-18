<?php
/**
 * Created by PhpStorm.
 * User: Rikard
 * Date: 2018-11-16
 * Time: 23:20
 */

session_start();

$servername = "localhost:3306";
$username = "root";
$password = "Rikard";
$userPass = (string)$_POST['psw'];
$userName = $_POST['uname'];
$_SESSION['validLogIn'] = false;
try {
    $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = $conn->prepare("SELECT * FROM users WHERE Username = '$userName'");
    $sql->execute();
    $result =$sql->setFetchMode(PDO::FETCH_ASSOC);


    foreach(new RecursiveArrayIterator($sql->fetchAll()) as $k=>$v) {
        foreach ($v as $key=>$value){
            if($value==$userPass){
                $_SESSION['validLogIn'] = true;
                $_SESSION['username']=$userName;
            }
        }

    }

    if($_SESSION['validLogIn']){
        header("Location: MyPage.php");
    }else{
        header("Location: logIn.php");
    }
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>