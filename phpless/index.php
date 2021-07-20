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
		<nav>
			<ul>
				<li><a href="les1/">LES 1</a></li>
				<li><a href="les2/">LES 2</a></li>
				<li><a href="les3/">LES 3</a></li>
				<li><a href="les4/">LES 4</a></li>
				<li><a href="les5/">LES 5</a></li>
				<li><a href="les6/">LES 6</a></li>
				<li><a href="les7/">LES 7</a></li>
				<li><a href="html/">LES HTML</a></li>
				<li><a href="send/">LES SEND MAIL</a></li>
			</ul>
		</nav>
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
		<div class="les string">
		<?php
			include("string.php");
		?>
		</div>
</body>
</html>