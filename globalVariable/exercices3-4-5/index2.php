<?php 

	echo 'Identifiant : ',$_COOKIE['Login'],'<br>';
	echo 'Mot de passe : ',$_COOKIE['Password'],'<br>';

	echo '<form action="" method="post"><div><input type="text" name="Login" placeholder="Modify Login"></div>';
	echo '<div><input type="password" name="Password" placeholder="Modify Password"></div>';
	echo '<div><button type="submit">Modifier</button></div></form>';

	$name = $_POST['Login'];
	$code = $_POST['Password'];

	setcookie('Login',$name);
	setcookie('Password',$code);

	echo '<div><a href="index2.php">Récuperer nouvelles données</a></div>';

?>