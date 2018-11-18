<?php
/**
 * Created by PhpStorm.
 * User: Rikard
 * Date: 2018-11-18
 * Time: 13:58
 */

session_start();

$servername = "localhost:3306";
$username = "root";
$password = "Rikard";
$userName = $_SESSION['username'];
$comment = $_POST['comment'];
$ID = $_POST['recipeID'];

$match = false;
try {
    $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "INSERT INTO comments(Username,Comment,Topic)
    VALUES ('$userName', '$comment','$ID')";
    $conn->exec($sql);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>