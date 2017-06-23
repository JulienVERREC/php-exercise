<?php
echo "Exercice 1<br>";
function true(){
	echo "true";
}
true();
echo "<br>";

echo "Exercice 2<br>";
$text = "chaine de caractères";
function string($text){
	echo $text;
}
string($text);
echo "<br>";

echo "Exercice 3<br>";
$text1 = "j'aime manger ";
$text2 = " de la viande";
function concat($text1,$text2){
	echo $text1,$text2;
}
concat($text1,$text2);
echo "<br>";

echo "Exercice 4<br>";
$number1 = 2;
$number2 = 7;
function compare($number1,$number2){
	if ($number1 > $number2){
		echo "le premier nombre est plus grand";
	}
	elseif ($number1 < $number2) {
		echo "le premier nombre est plus petit";
	}
	else{
		echo "les deux nombres sont identiques";
	}
}
compare(number1,number2);
echo "<br>";

echo "Exercice 5<br>";
$number = 9;
$text = " neuf";
function numberString($number,$text){
	echo $number,$text;
}
numberString($number,$text);
echo "<br>";

echo "Exercice 6<br>";
$name = "Robert";
$firstname = "Eugène";
$age = 25;
function makeString($name,$firstname,$age){
	echo ("Bonjour  $name  $firstname  tu as  $age  ans.");
}
makeString($name,$firstname,$age);
echo "<br>";

echo "Exercice 7<br>";
$age;
$sex;
function genre($age,$sex){
	if ($age > 18 && $sex === "homme") {
		echo "Vous êtes un homme et vous êtes majeur.";
	}
	elseif ($age < 18 && $sex === "homme") {
		echo "Vous êtes un homme et vous êtes mineur.";
	}
	elseif ($age > 18 && $sex === "femme") {
		echo "Vous êtes une femme et vous êtes majeur.";
	}
	else {
		echo "Vous êtes une femme et vous êtes mineur.";
	}
}
genre(19,"homme");
echo "<br>";

echo "Exercice 8<br>";
$number1 = 48;
$number2 = 89;
$number3 = 77;
function add($number1,$number2,$number3){
	echo $number1+$number2+$number3;
}
add($number1,$number2,$number3);
?>