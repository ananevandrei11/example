<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LES 7</title>
</head>

<body>
	<?php
	$char = 'C++';
	switch ($char) {
		case 'PHP':
			echo "<h1>{$char}</h1>";
			break;
		case 'JS':
			echo "<h1>{$char}</h1>";
			break;
		case 'C#':
			echo "<h1>{$char}</h1>";
			break;
		case 'C++':
			echo "<h1>{$char}</h1>";
			break;
		default:
			echo "<h1>Undefinded</h1>";
	}
	echo "<hr>";
	$num = 64;
	switch ($num) {
		case ($num > 10 && $num <= 25):
			echo "<h1> 10 < {$num} <= 25</h1>";
			break;
		case ($num > 25 && $num <= 50):
			echo "<h1> 25 < {$num} <= 50</h1>";
			break;
		case ($num > 50 && $num <= 75):
			echo "<h1> 50 < {$num} <= 75</h1>";
			break;
		case ($num > 75 && $num <= 100):
			echo "<h1> 75 < {$num} <= 100</h1>";
			break;
		default:
			echo "<h1>Undefinded</h1>";
	}
	?>
</body>

</html>