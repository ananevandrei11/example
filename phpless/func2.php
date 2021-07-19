<?php
	function recurs($count) {
		if ($count > 0) {
			echo $count--."<br>";
			recurs($count);
		}
		return false;
	}
	recurs(10);

	function outer() {
		function inner() {
			echo "<br> Hello, World!";
		}
	}

outer();
inner();






?>