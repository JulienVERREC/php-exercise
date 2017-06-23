<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	echo '<form action="" method="post"><div><input type="text" name="Login" placeholder="Login"></div>';
	echo '<div><input type="password" name="Password" placeholder="Password"></div>';
	echo '<div><button type="submit">Register</button></div></form>';

	$name = $_POST['Login'];
	$code = $_POST['Password'];

	setcookie('Login',$name);
	setcookie('Password',$code);

	echo '<div><a href="index2.php">Récuperer</a></div>';

	?>

</body>
</html>