<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Imagens - While</title>
</head>
<body>
	<h1>Imagens While</h1>

	<?php
		$x = 1;

		while ($x <= 6) {
			echo "<img src='$x.jpg'>";
			$x++;
		}
	?>

</body>
</html>