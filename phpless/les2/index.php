<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "PAGE 2"; ?></title>
</head>

<body>
	<?php
	$title = "PAGE 2";
	$num1 = 012;
	$num2 = 0x12A;
	$num3 = 1.02010e3;
	$str1 = 'NUMBER';
	echo $str1 . ': ' . $num1 . '</br>';
	echo $str1 . ': ' . $num2 . '</br>';
	echo $str1 . ': ' . $num3;
	echo "</br>$str1";
	echo "</br>\"$num3\" is $str1";
	echo "</br>{$num3}$ is $str1";

	#echo `dir`;
	?>
	<?php
	$user = "Ivan";
	if (isset($user))
		echo ("</br>It is true");
	else
		echo ("</br>It is not true");

	$str = "sdfdf";
	if (empty($str))
		echo ("</br>It is true");
	else
		echo ("</br>It is not true");


	echo "</br>" . gettype($str);

	if (is_bool(false))
		echo ("</br>It is true");
	else
		echo ("</br>It is not true");
	?>

	<h1>ПРИВЕДЕНИЕ ТИПОВ</h1>

	<?php
		$str3 = "45aa";
		$num4 = $str3 - 12;
		echo $num4;


		echo "</br>".true;


		$float = 45.263;
		$num6 = (int)$float;
		echo "</br> float = ".$float."</br> int = ".$num6;

		$num7 = 45;
		$float2 = (float)$num7+0.223235;
		echo "</br> float = ".$float2."</br> int = ".$num7;
	?>
</body>

</html>