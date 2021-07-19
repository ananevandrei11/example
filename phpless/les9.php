<?php
	$arr = [1, 2, 3, 4];
	list($one, $two, $three) = $arr;
	echo "<hr>";
	echo "arr[0] = $one; arr[1] = $two; arr[2] = $three;";

	$x = "x";
	$y = "y";
	list($y, $x) = [$x, $y];
	echo "<br> x = $x, y = $y";

	echo "<hr>";
	$arr2 = [31, 92, 23, 46, 45, 58, 14, 25];
	for ($i = 0; $i < count($arr2); $i++) {
		echo "$arr2[$i]; ";
	}
	echo "<br>";
	foreach($arr2 as $key => $val) {
		$key += 1;
		echo "$key = $val; ";
	}
	$arr3 = array_merge($arr, $arr2);
	echo "<br> $arr3[5]";

	echo "<br>";
	sort($arr3, $flags = SORT_NUMERIC);
	foreach($arr3 as $i => $v) {
		$i += 1;
		echo "$i = $v;\n";
	}


?>