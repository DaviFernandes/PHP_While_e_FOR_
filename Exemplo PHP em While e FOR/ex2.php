<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FOR</title>
</head>
<body>
	<h1> FOR </h1>

	<?php 	// valor , condição , 
		for ($x=0; $x <= 10 ; $x++) { 
			echo $x;
			echo "<br>";
		}

		echo "<p> outra forma </p>";

		for ($x=0; $x <= 10 ; ++$x) { 
			echo $x;
			echo "<br>";
		}

	?>

</body>
</html>