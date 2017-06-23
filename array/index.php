<?php
echo "Exercice 1<br>";
$mois = array(
	"janvier",
	"février",
	"mars",
	"avril",
	"mai",
	"juin",
	"juillet",
	"aout",
	"septembre",
	"octobre",
	"novembre",
	"décembre"
	);
foreach ($mois as $value) {
	echo "$value<br>";
}
// reset($mois);
// while (list(, $value) = each($mois)) {
//  	echo "Valeur : $value<br />\n";
// } 

echo "<br>";

echo "Exercice 2<br>";
echo $mois[2];
echo "<br>";

echo "Exercice 3<br>";
echo $mois[5];
echo "<br>";

echo "Exercice 4<br>";
$mois[7] = "août";
foreach ($mois as $value) {
    echo " $value<br>";
}
echo "<br>";

echo "Exercice 5<br>";
$nord = array(
	"02"	=> "Aisne",
	"59"	=> "Nord",
	"60"	=> "Oise",
	"62"	=> "Pas De Calais",
	"80"	=> "Somme",
	);
foreach ($nord as $value) {
	echo "$value<br>";
}
echo "Exercice 6<br>";
echo "Valeur de l'index 59 : ";
echo $nord["59"];
echo "<br>";

echo "Exercice 7 <br>";
$nord = $nord + array("51"	=>"Marne");
foreach ($nord as $value) {
 	echo " $value<br>";
}
echo "Exercice 8<br>";
foreach ($mois as $value) {
    echo " $value<br>";
}

echo "Exercice 9<br>";
foreach ($nord as $value) {
	echo "$value<br>";
}

echo "Exercice 10<br>";
foreach ($nord as $key => $value) {
	echo "Le département: $value a le numéro $key.<br>";
}

?>

