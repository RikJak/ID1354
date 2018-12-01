<?php
/**
 * Created by PhpStorm.
 * UserDTO: Rikard
 * Date: 2018-11-30
 * Time: 15:47
 */

namespace RecipesWebsite\Integration;
use RecipesWebsite\Util\Comment;
use RecipesWebsite\Util\UserDTO;

class ServerAccess
{
private $servername = "localhost:3306";
private $username = "root";
private $password = "Rikard";
private $dbname = "mydb";

private function openConnection(){
    try{
        /*    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/

        $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
// Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
        }

    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null;
    }

}

public function getUser($userName){
   $conn = $this->openConnection();
    /*$sql = $conn->prepare("SELECT Username,Password FROM users WHERE Username = '$userName'");
    $sql->execute();
    $result =$sql->setFetchMode(PDO::FETCH_ASSOC);*/

    $sql = "SELECT Username,Password FROM users WHERE Username = '$userName'";
    $data = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($data);

    mysqli_close($conn);
    return new UserDTO($result['Username'],$result['Password']);
}

public function setUser(UserDTO $user){

    $userName = $user->getUsername();
    $userPass = $user->getPassword();

    $conn = $this->openConnection();
    $sql = "INSERT INTO users(Username, Password)
    VALUES ('$userName', '$userPass')";

    if (mysqli_query($conn, $sql)) {
        //echo "New record created successfully";
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    //$conn->exec($sql);
}

public function getComment($recipe){

    $conn = $this->openConnection();
    $sql = $conn->prepare("SELECT * FROM comments WHERE Topic = '$recipe'");
    $sql->execute();
   // $comments = $sql->fetchAll();

    $entries = null;
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($comment = mysqli_fetch_assoc($result)) {
            $entry = new Comment($comment['Username'],$comment['Comment'],$comment['CommentID']);
            $entries[] = $entry;
        }
    } else {
        //echo "0 results";
    }

   /* foreach ($comments as $comment){
        $entry = new Comment($comment['Username'],$comment['Comment'],$comment['CommentID']);
        $entries[] = $entry;
    }*/

    return $entries;


}

public function addComment(Comment $comment,$recipe){

    $userName = $comment->getUsername();
    $message = $comment->getMessage();

    $conn = $this->openConnection();
    $sql = "INSERT INTO comments(Username,Comment,Topic)
    VALUES ('$userName', '$message','$recipe')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        return false;
    }

    mysqli_close($conn);
    //$conn->exec($sql);
}


}