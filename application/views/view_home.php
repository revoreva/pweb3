<html>
	<head>
		<title>Hello World</title>
	</head>
	<body>
		<h1>Welcome, <?php echo $this->session->userdata('username');?>!</h1>

		<p><?php echo anchor('login/do_logout', 'Logout')?></p>
	</body>
</html>