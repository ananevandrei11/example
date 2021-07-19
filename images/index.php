<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>WORK WITH IMAGES</title>
	<link rel="stylesheet" href="images.css" />
</head>

<body>
	<header>
		<?php
			include("../nav.php");
		?>	
	</header>

	<main>
		<div class="box">
		</div>
		<div class="boximg">
			<img src="../img/3.JPG" alt="">
		</div>
		<div class="boxsvg">
			<svg width="250" height="250">
				<pattern id="pattern" width="250" height="250">
					<image xlink:href="../img/2.JPG"  width="250" height="250" preserveAspectRatio="xMinYMid slice"></image>
				</pattern>
				<circle cx="125" cy="125" r="100" fill="url(#pattern)"></circle>
			</svg>
		</div>
	</main>

</body>

</html>