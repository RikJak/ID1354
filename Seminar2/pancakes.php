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
			<div id = "title">
		<h1>Pancakes!</h1>
	</div>
		<div class ="recipe">
			<div class="image">
				<img src ="bin/pancakes.png" alt = "Pancakes covered in ketchup, my favorite!">
			</div>
			
			<div class ="ingredients">
				<h2>Ingredients:</h2>
				<ul class = "listOfIngredients">
					<li>1 egg</li>
					<li>1 unit of flour</li>
					<li>1 unit of sugar</li>
					<li>1 kg butter</li>
				</ul>
			</div>
			
			<div class = "method">
				<h2>Method:</h2>
				<ul class="steps">
					<li><p>1. In a large bowl, sift together the flour, baking powder, salt and sugar. Make a well in the center and pour in the milk, egg and melted butter; mix until smooth. </p></li>
					<li><p>2. Heat a lightly oiled griddle or frying pan over medium high heat. Pour or scoop the batter onto the griddle, using approximately 1/4 cup for each pancake. Brown on both sides and serve hot. </p></li>
				</ul>
			</div>
			<div class ="comments">
				
			</div>
		</div>
    <div class="commentField">
        <form action="PostComments.php" method="post">
            <textarea name="comment" rows="10" cols="28" placeholder="Enter comment!"></textarea>
            <input id="recipeId" name="recipeID" type="hidden" value="pancakes">
            <br>
            <?php if(isset($_SESSION['username'])){
                echo '<button type="submit">Submit</button>';
            }?>
        </form>

    </div>
    <div class ="comments">
        <ul class ="listOfComments">
            <?php include 'PrintComment.php';
            printComments('pancakes')?>
        </ul>
    </div>
	</body>