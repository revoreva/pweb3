<html>
	<head>

	</head>
	<body>
		<h1>Input Data</h1>
		<?php echo form_open('register')?>
			<p>Nama : </p><input type="text" name="nama" value="<?php echo set_value('nama');?>"><?php echo form_error('nama'); ?>
			<p>Username : </p><input type="text" name="username" value="<?php echo set_value('username');?>">
			<p>Password : </p><input type="text" name="password" value="<?php echo set_value('password');?>">
			<p></p><input type="submit" value="register">
	</body>
</html>