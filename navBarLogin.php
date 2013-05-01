<?php
  $login = array(
		'name'	=> 'login',
		'id'	=> 'login',
		'value' => set_value('login'),
		'maxlength'	=> 80,
		'size'	=> 30,
	);
	if ($login_by_username AND $login_by_email) {
		$login_label = 'Email or username';
	} else if ($login_by_username) {
		$login_label = 'Username';
	} else {
		$login_label = 'Email';
	}
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
			<td class = "login">
				<div class = "menuBar">Login</div>
				<div class = "menuBody">
					<?php echo form_open($this->uri->uri_string()); ?>
					<table border = 0>
						<tr>
							<td><?php echo form_label($login_label, $login['id']); ?></td>
						</tr>
						<tr>
							<td><?php echo form_input($login); ?></td>	
							<td style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></td>
						</tr>
						<tr>
							<td><?php echo form_label('Password', $password['id']); ?></td>
						</tr>
						<tr>
							<td><?php echo form_password($password); ?></td>
							<td style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></td>
						</tr>
						<tr>
							<td colspan="3">
								<?php echo form_label('Remember me', $remember['id']); ?>
								<?php echo form_checkbox($remember); ?>
							</td>
						</tr>
					</table>
					<?php echo form_submit('submit', 'Login'); ?>
					<table>
						<tr>
							<td><?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?></td>
							<td><?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register'); ?></td>
						</tr>
					</table>
					<?php echo form_close(); ?>
				</div>
			</td>
		</tr>
	</table>
</td>
