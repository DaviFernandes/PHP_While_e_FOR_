<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tabelinha</title>
</head>
<body>
	<h1>Tabelinha</h1>

	<table border="1"> <!-- Criação da tabela   tr = linha   td =  coluna -->
		<tr bgcolor="#ccc">
			<td width="100">1</td>
			<td>Henrrique</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Alessandro</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Tião</td>
		</tr>
	</table>

	<h3>Criar linhas da tabela com While</h3>
<table border="1">
	<?php
		$x = 0;
		while ($x <= 10) {
			echo"<tr>
					<td> $x </td>
				</tr>";
			$x++;
		}

	?>
</table>
	<h3>Forma com FOR</h3>
<table border="1">
	<?php
		for ($x=0; $x <= 10 ; $x++) { 
		
			echo"<tr>
					<td> $x </td>
				</tr>";
		}

	?>
</table>
	

</body>
</html>