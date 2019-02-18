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
	echo "<h1>Hallo Wereld!</h1>";

$txt = "<h1>Hello World!</h1>";
	echo $txt;



$txt = "Learning PHP";
$text = "<h1>Hello World</h1>";
	echo $txt;
	echo "<br>";
	echo $text;


$x = "<h1>Hello</h1>";
$y = "<h1>World!</h1>";
	echo $z = $x . $y;



$world = array("Hello", "World");
	echo $world[0] . " " .$world[1];

?>
<footer>
<?php include "week1-Footer.php";?>
</footer>
</body>
</html>
