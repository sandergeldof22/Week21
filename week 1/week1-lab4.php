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

$favgame = "Monopoly";
$choice = "ja";
$yj = "20";
$yn = "90";
$mj = "2";
$mn = "80";
$sj = "2";
$sn = "5";
	
switch ($favgame) {
	case Yathzee:
		if ($choice = "ja") {
			if ($yj >= "15" && $yj <= "30") {
				echo "Je wilt Yathzee spelen want je hebt tussen de 15 en 30 minuten tijd";
			}else {
				echo "Je wilt Yathzee spelen want dat vindt je gewoon leuk";
			}
		}else {
			if ($yn > "100") {
				echo "Je wilt geen Yathzee spelen want je wilt meer dan 100x met een dobbelsteen gooien";
			}else {
				echo "Je wilt geen Yathzee spelen want je wilt minder dan 100 punten halen";
			}
		}
		break;
	case Monopoly:
		if ($choice = "ja") {
			if ($mj = "1") {
				echo "Je wilt Monopoly spelen want je hebt aan 1 spelletje genoeg";
			}else {
				echo "Je wilt Monopoly spelen want je houd er van om iedereen blut te maken";
			}
		}else {
			if ($mn = "2" or $mn > "120") {
				echo "Je wilt Monopoly niet spelen want je hebt geen zin in een spel van 2 uur";
			}else {
				echo "Je wilt Monopoly niet spelen want je houd niet van hotels";
			}
		}
		break;
	case Schaken:
		if ($choice = "ja") {
			if ($sj = "2") {
				echo "Je wilt Schaken want je vindt zwart en wit leuk";
			}else {
				echo "Je wilt Schaken want je denkt slimmer dan mij te zijn";
			}
		}else {
			if ($sn = "-1") {
				echo "Je wilt echt niet Schaken";
			}else {
				echo "Je wilt gewoon niet Schaken";
			}
		}
		break;
	default:
		echo "blijkbaar wil je geen spel spelen";

}
?>
<footer>
<?php include "week1-Footer.php";?>
</footer>
</body>
</html>
