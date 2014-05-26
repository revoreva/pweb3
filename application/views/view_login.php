<!DOCTYPE HTML>
<html>
	<head>
		<title>Login Form</title>
	</head>
	<body>
		<?php echo form_open('login/do_login'); ?>
		Username: <input type="text" name="username">
		Password: <input type="password" name="password">
		<input type="submit" name="login_button"
			value="Login">
		<?php echo $this->session->flashdata('pesan');?>
		<?php echo form_close(); ?>
	</body>
</html>
