<!DOCTYPE html>
<html>
<body>
	<?php
	echo "Exercice 1<br>";
	echo "Today is " . date("d/m/Y") . "<br>";
	echo "<br>";

	echo "Exercice 2<br>";
	echo "Today is " . date("d/m/y") . "<br>";
	echo "<br>";

	echo "Exercice 3<br>";
	echo "Today is " . date("l/F/Y") . "<br>";
	setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
	echo (strftime(" Aujourd'hui nous sommes le %A %d %B %Y"));
	echo "<br><br>"; 

	echo "Exercice 4<br>";
	echo "Aujourd'hui nous sommes le " . date("d-m-Y H:i:s") . "<br>";
	echo ("mardi 2 août 2016 à 15h00.<br>");
	echo "<br>";

	echo "Exercice 5<br>";
	$now   = time();
	$date2 = strtotime('2016-05-16 00:00:00');
 
	function dateDiff($date1, $date2){
	    $diff = abs($date1 - $date2); 
	    $retour = array();
	 
	    $tmp = $diff;
	    $retour['second'] = $tmp % 60;
	 
	    $tmp = floor( ($tmp - $retour['second']) /60 );
	    $retour['minute'] = $tmp % 60;
	 
	    $tmp = floor( ($tmp - $retour['minute'])/60 );
	    $retour['hour'] = $tmp % 24;
	 
	    $tmp = floor( ($tmp - $retour['hour'])  /24 );
	    $retour['day'] = $tmp;
	 
	    return $retour;
	}
	echo "le nombre de jour qui sépare la date du jour avec le 16 mai 2016 est : ";
	print_r( dateDiff($now, $date2));
	echo "<br>";

	echo "Exercice 6<br>";
	//$m le numéro du mois en question et $y l'année.
	$m = 02;
	$y = 2016;
	$mois = mktime( 0, 0, 0, $m, 1, $y );
    setlocale('LC_ALL', 'fr_FR');
    echo "Le mois de ".date("F Y",$mois)." possède ".date("t",$mois)." jours";
    echo "<br>";

    echo "Exercice 7<br>";
   	echo date('d-m-Y', strtotime('+20 days'));
   	echo "<br>";

   	echo "Exercice 8<br>";
   	echo date('d-m-y', strtotime('-22 days'));
   	echo "<br>";

   	echo "TP <br>";

	echo '<SELECT name="m">';
		for($m=1; $m<=12;$m++){        
	        if ($m < 10){            
	            echo "<OPTION>0$m</OPTION>";
	        }
	        else {
	            echo "<OPTION>$m</OPTION>";
	        }
	    }
	echo "</SELECT>";
	 
	$date = date('Y');      
	echo '<SELECT name="y">';
	    for ($y=1970; $y<=$date; $y++) {           
	        echo "<OPTION>$y</OPTION>"; 
	 	}
	echo "</SELECT>";
	     
	?>
</body>
</html>