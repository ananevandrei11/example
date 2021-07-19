<?php
	function myFunc($var) {
		echo "Hello, $var";
	}

	myFunc('Ivan');
	function setNum(int $a = 0, int $b = 0): int {
		return $a + $b;
	}

	$num = setNum(15, 676);
	echo "<br> $num";

	function setGlobNum(& $a) { // & - пережача глобального значения
		$a += 10;
		return $a;
	}
	$num2 = 61;
	setGlobNum($num2);
	echo "<br> $num2";
	echo "<br>";
	echo setNum();
	echo "<br>";

	function setUnknow(...$i) {
		foreach($i as $val) {
			echo "$val; ";
		}
	}
	setUnknow('PHP', 'JS', 'HTML', 'CSS');

	echo "<hr>";
	function setSize($bytes) {
		$kbbytes = $bytes / 1024;
		$mbbytes = $kbbytes / 1024;
		$gbbytes = $mbbytes / 1024;
		return [(int) $bytes, (int) $kbbytes, (int) $mbbytes, (int) $gbbytes];
	}
	echo "<pre>";
	list ($bytes, $kbbytes, $mbbytes, $gbbytes) = setSize(4657816876);
	echo "$bytes, $kbbytes, $mbbytes, $gbbytes";
	echo "</pre>";
?>