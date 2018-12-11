<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset = "utf-8">
    <title>Tasty Recipes!</title>
    <link rel="shortcut icon" type="image/png" href="../resources/bin/favicon.png"/>
    <link rel="stylesheet" type="text/css" href = "../resources/css/reset.css">
    <link rel="stylesheet" type="text/css" href = "../resources/css/menu.css">
    <link rel="stylesheet" type="text/css" href = "../resources/css/general.css">
    <link rel="stylesheet" type="text/css" href = "../resources/css/recipe.css">
    <?php include RecipesWebsite\Util\Constants::getViewFragmentsDir().'header.php';?>
    <script type="text/javascript"
            src="<?php echo RecipesWebsite\Util\Constants::getJsDir()?>Comments.js"></script>
</head>
<body>
<?php include 'Menu.php';?>
<?php $xml = simplexml_load_file('./resources/xml/cookbook.xml'); ?>
<div id = "title">
    <h1><?php echo $xml->recipe[1]->title;?></h1>
</div>
<div class ="recipe">
    <div class="image">
        <img src ="<?php echo $xml->recipe[1]->imagepath;?>" alt = "Pancakes with ketchup! Yummy!">
    </div>

    <div class ="ingredients">
        <h2>Ingredients:</h2>
        <ul class = "listOfIngredients">
            <?php foreach($xml->recipe[1]->ingredient->children() as $ingredient){
                echo "<li>".$ingredient."</li>";
            }?>
        </ul>
    </div>

    <div class = "method">
        <h2>Method:</h2>
        <ul class="steps">
            <?php foreach($xml->recipe[1]->recipetext->children() as $step){
                echo "<li><p>".$step."</p></li>";
            }?>
        </ul>
    </div>
    <div class ="comments">

    </div>
</div>

</div>
<div class="commentField">
    <form action="PostComments" method="post">
        <textarea name="comment" rows="10" cols="28" placeholder="Enter comment!"></textarea>
        <input id="recipeID" name="recipeID" type="hidden" value="pancakes">
        <br>
        <?php if($loggedin){
            echo '<button type="submit">Submit</button>';
        }?>
    </form>

</div>
<div class ="comments">
    <ul class ="listOfComments">
        <?php
        foreach ($entries as $entry) {

            echo '<li class="comment">';
            echo $entry->getUsername().":";
            echo '<br>';
            echo $entry->getMessage();
            if($loggedin){
                if($entry->getUsername() == $username){
                    echo '<form action = "DeleteComment" method="post">';
                    echo '<input name="CommentID" type="hidden" value="'.$entry->getCommentID().'">';
                    echo '<button type="submit">Delete</button>';
                }}
            echo "</li>";
        }
        ?>
    </ul>
</div>
</body>