<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
		$firstname = $_POST['firstname'];
		$name = $_POST['name'];
		$sex = $_POST['sex'];
		$fichier = $_POST['fichier'];
		$extension = pathinfo($fichier);
		$extension= $extension["extension"];
		var_dump($extension);
		// var_dump($firstname);
		// var_dump($name);
		// var_dump($sex);
		// var_dump($fichier);
		if ($firstname === null || $name === "" || $sex === "" || $extension !="pdf") {
			echo'<form action="" method="post">
					<label for="nom">Nom :</label><input type="text" name="firstname" id="nom"/>
					<label for="prenom">Prénom :</label><input type="text" name="name" id="prenom"/>
					<label for="fichier">Fichier :</label><input type="file" name="fichier" id="fichier"/>
						<select name="sex">
							<option value="female">Madame</option>
							<option value="male">Monsieur</option>
						</select>
					<button type="submit" value="send">Send</button>	
				</form>';
		}
		else {
			echo "Bonjour", $firstname," ", $name, " ", $sex, " nom de fichier :", $fichier;
		}
	?>
</body>
</html>