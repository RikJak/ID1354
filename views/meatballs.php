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
	</head>
	<body>
    <?php include 'Menu.php';?>
    <?php $xml = simplexml_load_file('../resources/xml/cookbook.xml');?>
    <div id = "title">
        <h1><?php echo $xml->recipe[0]->title;?></h1>
    </div>
    <div class ="recipe">
        <div class="image">
            <img src ="<?php echo $xml->recipe[0]->imagepath;?>" alt = "Pancakes covered in ketchup, my favorite!">
        </div>

        <div class ="ingredients">
            <h2>Ingredients:</h2>
            <ul class = "listOfIngredients">
                <?php foreach($xml->recipe[0]->ingredient->children() as $ingredient){
                    echo "<li>".$ingredient."</li>";
                }?>
            </ul>
        </div>

        <div class = "method">
            <h2>Method:</h2>
            <ul class="steps">
                <?php foreach($xml->recipe[0]->recipetext->children() as $step){
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
                <input id="recipeId" name="recipeID" type="hidden" value="meatballs">
                <br>
                <?php if(isset($_SESSION['username'])){
                echo '<button type="submit">Submit</button>';
                }?>
            </form>

        </div>
					<div class ="comments">
				<ul class ="listOfComments">
                    <?php
                    foreach ($entries as $entry) {
                        echo("<p class='author'>" . $entry->getUsername() . ":</p>");
                        echo("<p class='entry'>");
                        echo(nl2br($entry->getMessage()));
                        echo("</p>");
                        if ($entry->getUsername() === $username) {
                            echo("<form action='DeleteEntry' method='POST'>");
                            echo("<input type='hidden' value='" .
                                $entry->getCommentID() . "'/>");
                            echo("<input type='submit' value='Delete'/>");
                            echo("</form>");
                        }
                    }
                    ?>
				</ul>
			</div>
	</body>