<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="user.php" method="get">
	<label for="nom">Nom :</label><input type="text" name="firstname" id="nom"/>
	<label for="prenom">Prénom :</label><input type="text" name="name" id="prenom">
		<select name="sex">
			<option value="female">Madame</option>
			<option value="male">Monsieur</option>
		</select>
	<input type="submit" value="send">	
	</form>

	<form action="user.php" method="post">
	<label for="nom">Nom :</label><input type="text" name="firstname" id="nom"/>
	<label for="prenom">Prénom :</label><input type="text" name="name" id="prenom">
		<select name="sex">
			<option value="female">Madame</option>
			<option value="male">Monsieur</option>
		</select>
	<input type="submit" value="send">	
	</form>

</body>
</html>