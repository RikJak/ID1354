<?php
/**
 * Created by PhpStorm.
 * User: Rikard
 * Date: 2018-11-18
 * Time: 15:28
 */

function printComments(recipe){
$servername = "localhost:3306";
$username = "root";
$password = "Rikard";
try {
    $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = $conn->prepare("SELECT * FROM comments");
    $sql->execute();
    $comments = $sql->fetchAll();

    foreach ($comments as $comment){
        echo '<li class="comment">';
        echo $comment['Username'].":";
        echo $comment['Comment'];
        if($comment['Username']==$_SESSION['username']){
            echo '<form action = "DeleteComment.php" method="post">';
            echo '<input name="CommentID" type="hidden" value="'.$comment['CommentID'].'">';
            echo '<button type="submit">Delete</button>';
        }
        echo "</li>";
    }

}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
}?>