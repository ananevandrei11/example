<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<?php
require "header.php";
//

require "pointer.php";

$float = 21.5;

echo (round($float, 0, PHP_ROUND_HALF_UP));
echo (round($float, 0, PHP_ROUND_HALF_DOWN));
echo (ceil($float));
?>
</br>
<section style="height: 50vh; background-color: aqua;"></section>
<?php

$poin1 = new Pointer;
$poin1->x1 = 13;
$poin1->y1 = 45;
echo $poin1->y1;
echo $poin1::$num;
echo "</br> X: {$poin1->x1} and Y: {$poin1->y1}";
//
require "footer.php";
?>
</body>

</html>