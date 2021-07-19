<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		//$page = $_SERVER['PHP_SELF'];
		//$sec = "2";
		//header("Refresh: $sec");
		include("../nav.php");
	?>
		<div class="les les8">
		<?php
			include("les8.php");
		?>
		</div>
		<div class="les les9">
		<?php
			include("les9.php");
		?>
		</div>
		<div class="les les10">
		<?php
			include("les10.php");
		?>
		</div>
		<div class="les func">
		<?php
			include("func.php");
		?>
		</div>
		<div class="les func2">
		<?php
			include("func2.php");
		?>
		</div>
</body>
</html>