<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>WHILE</title>
</head>
<body>
	<h1>While</h1>

	<h3>Primeiro Exemplo</h3>

	<?php
			// iniciar a variável x com 0
		$x = 0;

		while ($x <= 10){
			echo $x;
			echo "<br>";
			// $x = $x + 1;  // uma das formas 
			$x++;      // outra forma
		}
	?>

	<h3>Segundo Exemplo</h3>

	<?php
		$x = 0;

		while ($x <= 1) {
			echo $x;
			echo "<br>";
			++$x;
		}
	?>

</body>
</html>