<?php
// РЕКУРСИЯ
	function recurs($count) {
		if ($count > 0) {
			echo $count--."<br>";
			recurs($count);
		}
		return false;
	}
	recurs(10);
// ВЛОЖЕННОСТЬ
	function outer() {
		function inner() {
			echo "<br> Hello, World!";
		}
	}

outer();
inner();

// ЗАМЫКАНИЯ
$mess = 'TEXT';
$mFu = function() use ($mess) {
	$mess = 'OTHER TEXT';
	echo $mess;
};
echo "<br>";
$mFu();
echo "<br> $mess";



?>