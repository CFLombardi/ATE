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
<td class = "mainContent">
	<div class = "contentLogin">
		<?php echo form_open($this->uri->uri_string()); ?>
		<table border = 0>
			<tr>
				<td><?php echo form_label($login_label, $login['id']); ?></td>
				<td>
					<div class = "error">
						<?php echo form_input($login); ?>
						<?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
					</div>
				</td>
			</tr>
			<tr>
				<td><?php echo form_label('Password', $password['id']); ?></td>
				<td>
					<div class = "error">
						<?php echo form_password($password); ?>
						<?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<?php echo form_label('Remember me', $remember['id']); ?>
					<?php echo form_checkbox($remember); ?>
				</td>
			</tr>
		</table>
		<?php echo form_submit('submit', 'Login'); ?>
	</div>
	<table>
		<tr>
			<td><?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?></td>
			<td><?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register'); ?></td>
		</tr>
	</table>
	<?php echo form_close(); ?>
</td>
