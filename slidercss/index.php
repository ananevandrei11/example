<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>SLIDER ONLY CSS</title>
	<link rel="stylesheet" href="slider.css" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
		<?php
			include("../nav.php");
		?>
	<header>
		<nav>
			<ul>
				<li>
					<a href="#" class="themetoggle">Toggle theme<span class="material-icons">wb_sunny</span></a>
				</li>
			</ul>
		</nav>
	</header>
	<div class="slider middle" id="sliderOne">
		<div class="slides">
			<input type="radio" name="r" id="r1" checked>
			<input type="radio" name="r" id="r2">
			<input type="radio" name="r" id="r3">
			<input type="radio" name="r" id="r4">

			<div class="slide s1"><img src="../img/1.JPG" alt="camel"></div>
			<div class="slide s2"><img src="../img/2.JPG" alt="chicken"></div>
			<div class="slide s3"><img src="../img/3.JPG" alt="elephant"></div>
			<div class="slide s4"><img src="../img/4.JPG" alt="shark"></div>
		</div>

		<div class="navigation">
			<label for="r1" class="bar"></label>
			<label for="r2" class="bar"></label>
			<label for="r3" class="bar"></label>
			<label for="r4" class="bar"></label>
		</div>

	</div>

	<div class="container">
		<div id="sliderTwo" class="gallery">
			<div class="gallery-line">
				<img src="../img/code-1.jpg" alt="">
				<img src="../img/code-2.jpg" alt="">
				<img src="../img/code-3.jpg" alt="">
				<img src="../img/code-4.jpg" alt="">
				<img src="../img/code-5.jpg" alt="">
			</div>
		</div>
		<button class="button gallery-prev">Prev</button>
		<button class="button gallery-next">Next</button>
	</div>
	<script src="slider.js"></script>
</body>

</html>