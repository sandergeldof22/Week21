<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/week1-alles.css"></link>
	<title>Website Week 21</title>
</head>
<body>

<nav>
<?php include "week1-Menu.php";?>
</nav>
<header>
<?php include "week1-Header.php";?>
</header>
<?php

$getal = 6;
$hoeveelheid = 10;

for($i=1; $i<=$hoeveelheid; ++$i){
	echo "$getal * $i = ".$getal * $i ."<br />";
}


function bereken($som){
	for($i = 1; $i<= 10; ++$i){
		$sum = "$som * $i = ".$som * $i ."<br>";
		echo $sum;
	}
}

bereken(6);


$numbers = array("3", "5", "8", "12");
	foreach ($numbers as $value) {
		for($i = 1; $i <= 10; ++$i) {
			$outcome = "$value * $i = ".$value * $i ."<br />";
			echo $outcome;
		} 
	}

?>
<footer>
<?php include "week1-Footer.php";?>
</footer>
</body>
</html>