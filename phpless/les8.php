<?php
		for ($i = 0; $i < 5; $i++) {
			echo "$i num<br>";
		}
		echo "<hr>";
		$arr = [15=>'hello', 8=>'bey', 0=>'hi'];
		$arr[10] = "Good";
		echo $arr[0];
		echo "<hr>";
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
		echo "<hr>";
		$arr2 = ['one'=>15, 'two'=>20];
		echo "<pre>";
		print_r($arr2);
		echo "</pre>";
		echo $arr2['one'];
		echo "<br>";
		echo "Number $arr2[two]";
	?>