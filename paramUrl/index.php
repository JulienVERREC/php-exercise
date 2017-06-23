<?php
	echo "Exercice 1<br>";

	$firstname = $_GET['nom'];
	$name = $_GET['prenom'];
	echo $name,"<br>",$firstname,"<br>";

	echo "Exercice 2<br>";
	$age = $_GET['age'];
	if ($age=="") {
		echo "Pas d'âge mentionné";
	}
	else {
		echo $age;
	}
	echo "<br>";

	echo "Exercice 3<br>";

	$start = $_GET['dateDebut'];
	$stop = $_GET['dateFin'];
	echo "Date de début : ",$start,"<br>","Date de fin : ",$stop;
	echo "<br>";

	echo "Exercice 4<br>";

	$langage = $_GET['langage'];
	$serveur = $_GET['serveur'];
	echo "langage utilisé : ", $langage,"<br>","Type de serveur : ", $serveur ;

	echo "Exercice 5<br>";

	$week = $_GET['semaine'];
	echo "Numéro de semaine : ", $week;
	echo "<br>";

	echo "Exercice 6<br>";

	$batNumber = $_GET['batiment'];
	$salNumber = $_GET['salle'];
	echo "Batiment numéro : ", $batNumber," Salle numéro : ", $salNumber;

 ?>

