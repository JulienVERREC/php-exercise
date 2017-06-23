<?php
echo "Exercice 1<br>";
for ($i = 0; $i <= 10 ; $i ++) { 
echo "the number is: $i <br>";
}

echo "Exercice 2<br>";
$i = 0;
$j = 30;
while ( $i < 20) {
echo "$i * $j.<br>"; 
$i ++;
}

echo "Exercice 3<br>";
$i = 100;
$j = 25;
while ( $i >= 10) {
	echo "$i * $j.<br>";
	$i --;
}

echo "Exercice 4<br>";
$i = 1;
while ( $i <= 10) {
	echo "$i.result:<br>";
	$i = $i + $i*0.5;

}

echo "Exercice 5<br>";
$i = 1;
while ( $i <= 15) {
	echo "On y arrive presque.<br>";
	$i ++;
}

echo "Exercice 6<br>";
$i = 20;
while ( $i >= 0) {
	echo "C'est presque bon.<br>";
	$i --;
}

echo "Exercice 7<br>";
$i = 1;
while ( $i <= 100) {
	echo "On tient le bon bout.<br>";
	$i = $i + 15;
}

echo "Exercice 8<br>";
$i = 200;
while ($i >= 0) {
	echo "Enfin !!!!.<br>";
	$i = $i -12;
}
?>