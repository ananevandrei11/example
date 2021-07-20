<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$page1 = file_get_contents('text.txt');
		echo $page1; 
		$today = date("Y-m-d-H-i-s");
		$page1 .= "\n{$today}";
		file_put_contents('text1.txt', $page1);
		$page2 = file_get_contents('text1.txt');
		echo "<hr>{$page2}"; 
		//file_put_contents($today.'.txt', $page2);
		$num = 1;
		while($num <= 5) {
			($num == 4) ? $num = 5 : $num = $num;
			echo "<br> {$num}) {$today}";
			$num++;
		}
	?>
</body>
</html>