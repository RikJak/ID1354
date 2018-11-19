	<!DOCTYPE html>
	<html lang ="en">
	<head>
		<meta charset = "utf-8">
		<title>Tasty Recipes!</title>
		<link rel="shortcut icon" type="image/png" href="bin/favicon.png"/>
		<link rel="stylesheet" type="text/css" href = "css/reset.css">
		<link rel="stylesheet" type="text/css" href = "css/menu.css">
		<link rel="stylesheet" type="text/css" href = "css/general.css">
		<link rel="stylesheet" type="text/css" href = "css/recipe.css">
	</head>
	<body>
    <?php include 'Menu.php';?>
    <?php $xml = simplexml_load_file('xml/cookbook.xml');?>
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
            <form action="PostComments.php" method="post">
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
                    <?php include 'PrintComment.php';
                    printComments('meatballs')?>
				</ul>
			</div>
	</body>