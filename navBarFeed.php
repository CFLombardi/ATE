<?php
  $login = array(
		'name'	=> 'login',
		'id'	=> 'login',
		'value' => set_value('login'),
		'maxlength'	=> 80,
		'size'	=> 30,
	);
	$password = array(
		'name'	=> 'password',
		'id'	=> 'password',
		'size'	=> 30,
	);
	$remember = array(
		'name'	=> 'remember',
		'id'	=> 'remember',
		'value'	=> 1,
		'checked'	=> set_value('remember'),
		'style' => 'margin:0;padding:0',
	);
?>
<td>
	<table cellspacing = 15>
		<tr>
			<td class = "mainMenu">
				<div class = "menuBar">Main Menu</div>
				<div class = "menuBody">
					<a href = "/ATE/index.php">Home</a>
					<br>
					<a href = "">AT-E Forums (Coming Soon)</a>
					<br>
					<a href = "https://docs.google.com/document/d/1_Mu3TCX89v1uZfKY0g5ULKWpkrGaD01MCQnP3FluHAk/edit?pli=1">Project Jobe</a>
				</div>
			</td>
		</tr>
		<tr>
			<td class = "externalLinks">
				<div class = "menuBar">External Links</div>
				<div class = "menuBody">
					<a href = "http://www.robertsspaceindustries.com/">RSI Main</a>
					<br>
					<a href = "http://www.robertsspaceindustries.com/forums/">RSI Forums</a>
					<br>
					<a href = "http://starcitizen.wikia.com/wiki/Star_Citizen">SC Wiki</a>
					<br>
					<a href = "http://www.reddit.com/r/starcitizen/">SC Subreddit</a>
				</div>
			</td>
		</tr>
		<tr>
			<td class = "logout">
				<a href = "/ATE/index.php/auth/logout">Logout</a>
			</td>
		</tr>
	</table>
</td>
