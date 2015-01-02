<div class="header">   
	<div class="container">
		<div class="search_bar">
			<form action=<? echo '"'.View::getHTMLFullPath('Search.php').'"';?> method="get">
				<input type="text" name="search" size="100">
			</form>
		</div>
		
		<div class="buttons">
			<a href="pages/PostEntry.php">
				<input type="image" src=<? echo '"'.View::getHTMLFullPath('add_post.png').'"';?> name="post" class="navigation_buttons" id="addPostButton" width="32" height="32">
			</a>
			<a href="../index.php">
				<input type="image" src=<? echo '"'.View::getHTMLFullPath('home.png').'"';?> name="home" class="navigation_buttons" id="homeButton" width="32" height="32">
			</a>
			<a href="Friends.php">
				<input type="image" src=<? echo '"'.View::getHTMLFullPath('users.svg').'"';?> name="friends" class="navigation_buttons" id="friendsButton" width="32" height="32">
			</a>
			<a href="Settings.php">
				<input type="image" src=<? echo '"'.View::getHTMLFullPath('settings.png').'"';?> name="settings" class="navigation_buttons" id="settingsButton" width="32"height="32">
			</a>
		</div>
	</div>
</div>