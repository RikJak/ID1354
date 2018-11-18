<?php
session_start();
?>
<div class = "menu">
			<ul class = "menuList">
				<li><a class="active" href="index.php">Index</a></li>
				<li><a href="calendar.php">Calendar</a></li>
				<li><a href="meatballs.php">Meatballs</a></li>
				<li><a href="pancakes.php">Pancakes</a></li>

                <?php if(array_key_exists('username', $_SESSION)){
                    echo '<li id = "log"><a href="MyPage.php">' .$_SESSION['username'].'</a></li>';
                }else{
                    echo '<li id = "log"><a class= "logIn" href="logIn.php">Log in</a></li>';
                }?>
			</ul>
		</div>