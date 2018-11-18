<?php
/**
 * Created by PhpStorm.
 * User: Rikard
 * Date: 2018-11-18
 * Time: 16:26
 */

session_start();

$servername = "localhost:3306";
$username = "root";
$password = "Rikard";
$ID = $_POST['CommentID'];

$match = false;
try {
    $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "DELETE FROM comments WHERE CommentID =$ID";
    $conn->exec($sql);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>