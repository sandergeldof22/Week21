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

$fruits = array("banaan", "appel", "sinaasappel", "mandarijn", "druif", "steak", "pornhub", "frikadellenbroodje");
foreach ($fruits as $value) {
	echo "$value <br>";
}
?>

<footer>
<?php include "week1-Footer.php";?>
</footer>

</body>
</html>