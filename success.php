<?php  

	session_start();

	if(empty($_SESSION['user_name']))
	{
		$_SESSION['errors'][] = 'You lousy little cheat. Play fair next time!';
		header('location: index.php');
		die();
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Success</title>
	<style>
		*
		{
			font-family: sans-serif;
		}
		a
		{
			text-decoration: none;
			padding: .5em .75em;
			background-color: black;
			color: red;
			border-radius: .25em;
		}
	</style>
</head>
<body>
	<h1>You made it!</h1>
	<h3>Welcome, <?=$_SESSION['user_name']?>!</h3>
	<a href="process.php">Logout</a>
</body>
</html>