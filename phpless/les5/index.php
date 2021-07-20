<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	$num = 7;
	$num .= '+5';
	echo $num;
	echo "<br>", "Number ", $num, " is true";
	echo "<br>", 4 ** 2;
	$a = 4;
	echo "<br>", ++$a;
	echo "<br>", --$a;
	echo "<br>", --$a;
	echo "<br>", --$a;
	echo "<br>", $a++;
	echo "<br>", $a++;
	echo "<br>", $a++;
	echo "<br>", $a++;
	echo "<br>", $a++;
	echo "<br>", $a++;
	echo date(DATE_RSS);
	?>

	<script>
		console.log(4 ** 2);
	</script>
</body>

</html>