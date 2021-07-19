<?php
	echo "<hr>";
	$color = ['red', 'green', 'yellow', 'blue', 'pink'];
	echo $color[rand(0,count($color)-1)];

	echo "<br>";
	$month = file("month.txt");
	echo "<pre>";
	print_r($month);
	echo "</pre>";
?>