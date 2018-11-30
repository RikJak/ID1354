<?php
/**
 * Created by PhpStorm.
 * User: Rikard
 * Date: 2018-11-30
 * Time: 15:47
 */

namespace RecipesWebsite\Integration;
use RecipesWebsite\Util\Comment;

class ServerAccess
{
private $servername = "localhost:3306";
private $username = "root";
private $password = "Rikard";
private $dbname = "mydb";

private function openConnection(){
    try{
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
        }

    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null;
    }

}

public function getUser($userName,$passWord){
    $conn = $this->openConnection();
    $sql = $conn->prepare("SELECT Username,Password FROM users WHERE Username = '$userName' AND Password = '$passWord'");
    $sql->execute();
    $result =$sql->setFetchMode(PDO::FETCH_ASSOC);

    return $result;
}

public function setUser($userName,$userPass){
    $conn = $this->openConnection();
    $sql = "INSERT INTO users(Username, Password)
    VALUES ('$userName', '$userPass')";
    $conn->exec($sql);
}

public function getComment($recipe){

    $conn = $this->openConnection();
    $sql = $conn->prepare("SELECT * FROM comments WHERE Topic = '$recipe'");
    $sql->execute();
    $comments = $sql->fetchAll();

    $entries = null;

    foreach ($comments as $comment){
        $entry = new Comment($comment['Username'],$comment['Comment'],$comment['CommentID']);
        $entries[] = $entry;
    }

    return $entries;


}

public function addComment(Comment $comment,$recipe){

    $userName = $comment->getUsername();
    $message = $comment->getMessage();

    $conn = $this->openConnection();
    $sql = "INSERT INTO comments(Username,Comment,Topic)
    VALUES ('$userName', '$message','$recipe')";
    $conn->exec($sql);
}


}