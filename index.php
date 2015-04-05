<?php  

	session_start();
	require('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login and Registration</title>
	<style>
		*
		{
			font-family: sans-serif;
		}
		.error
		{
			color: red;
		}
		.success
		{
			color: green;
		}
	</style>
</head>
<body>
	<?php  
		if(!empty($_SESSION['errors']))
		{
			foreach ($_SESSION['errors'] as $error) 
			{
				echo '<h3 class="error">'.$error.'</h3>';
			}
			unset($_SESSION['errors']);
		}
	?>
	<h1>Awesome Registration Page</h1>
	<h2>Register</h2>
	<form action="process.php" method="post">
		<label for="f_name">First Name: </label>
		<input type="text" name="f_name"><br>
		<label for="l_name">Last Name: </label>
		<input type="text" name="l_name"><br>
		<label for="email">Email Address: </label>
		<input type="text" name="email"><br>
		<label for="password">Password: </label>
		<input type="password" name="password"><br>
		<label for="confirm_pass">Re-type Password: </label>
		<input type="password" name="confirm_pass"><br>
		<input type="hidden" name="action" value="register">
		<input type="submit" value="Register">
	</form>
	<?php  
		if(!empty($_SESSION['success_message']))
		{
			echo '<h3 class="success">'.$_SESSION['success_message'].'</h3>';
			unset($_SESSION['success_message']);
		}
	?>
	<h2>Login</h2>
	<form action="process.php" method="post">
		<label for="email">Email Address: </label>
		<input type="text" name="email"><br>
		<label for="password">Password: </label>
		<input type="password" name="password"><br>
		<input type="hidden" name="action" value="login">
		<input type="submit" value="Login">
	</form>
</body>
</html>