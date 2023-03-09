<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<img class="logo" src="icontlk.png" alt="Ikon Telkom">
	
	<form class="form" action="login.php" method="post">
		<input type="text" placeholder="Username" id="username" name="username" require><br><br><br>
		<input type="text" placeholder="NIS" id="nis" name="nis" require><br><br><br>
		<input type="password" placeholder="Password" id="password" name="password" require><br><br><br><br>
		<a href="absen.php">
			<input type="button" type="submit" value="Next" id="next">
		</a>
	</form>
</body>
</html>