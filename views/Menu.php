<div class = "menu">
			<ul class = "menuList">
				<li><a class="active" href="index">Index</a></li>
				<li><a href="calendar">Calendar</a></li>
				<li><a href="meatballs">Meatballs</a></li>
				<li><a href="pancakes">Pancakes</a></li>

                <?php if($loggedin){
                    echo '<li id = "log"><a href="MyPage">'.$username.'</a></li>';
                }else{
                    echo '<li id = "log"><a class= "logIn" href="Login">Log in</a></li>';
                }?>
			</ul>
		</div>