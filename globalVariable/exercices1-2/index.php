<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>globalVariables</title>
</head>
<body>
	<?php 

		session_start();

		$_SESSION['nom'] = 'VERRECCHIA ';
		$_SESSION['prenom'] = ' Julien ';
		$_SESSION['age'] = ' 38 ans';

		echo '  <div><a href="index2.php">Lien vers mes infos</a></div>';



		$userAgent = $_SERVER['HTTP_USER_AGENT'];
			echo '	<h3>UserAgent</h3>
					<div>',$userAgent,'</div>';
		
		$AdresseIP = $_SERVER['REMOTE_ADDR'];				
			echo '	<h3>AdresseIP</h3>
					<div>',$AdresseIP,'</div>';
						
		$Serveur   = $_SERVER['SERVER_NAME'];			
			echo '  <h3>Serveur</h3>
					<div>',$Serveur,'</div><br>';
			
	?>
</body>
</html>
				
					