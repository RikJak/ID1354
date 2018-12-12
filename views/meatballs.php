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
    <script type="text/javascript"
            src="<?php echo RecipesWebsite\Util\Constants::getJsDir()?>delete.js"></script>
    <?php include 'Menu.php';?>
    <script type="text/javascript"
            src="<?php echo RecipesWebsite\Util\Constants::getJsDir()?>Comments.js"></script>
    <?php $xml = simplexml_load_file('./resources/xml/cookbook.xml'); ?>
    <div id = "title">
        <h1><?php echo $xml->recipe[0]->title;?></h1>
    </div>
    <div class ="recipe">
        <div class="image">
            <img src ="<?php echo $xml->recipe[0]->imagepath;?>" alt = "TASTY MEATBALLS!">
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
            <form data-bind="submit: send" id = 'post'>
                <textarea id = 'commentText' data-bind="value: message, valueUpdate: 'afterkeydown'" name="comment" rows="10" cols="28" placeholder="Enter comment!"></textarea>
                <input id="recipeID" data-bind="value: ID, valueUpdate: 'afterkeydown'" name="recipeID" type="hidden" value="meatballs">
                <br>
                <button type="submit">Submit</button>

            </form>

        </div>
					<div class ="comments">
				<ul class ="listOfComments">

				</ul>
			</div>
	</body>