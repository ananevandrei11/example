<?php
	class Point {
		public $x;
		public $y;
	}

	$firstP = new Point;
	$firstP->x = 0;
	$firstP->y = 0;

	$secondP = clone $firstP;
	echo $secondP->x;
	$secondP->x = 25;
	echo "/";
	echo $secondP->x = pow($secondP->x, 2);
	echo "/";
	echo $secondP->x = sqrt($secondP->x);
?>
<hr>
<?php
	$secondP->y = 37;
	$x1 = pow(($secondP->x - $firstP->x), 2);
	$y1 = pow(($secondP->y - $firstP->y), 2);
	$distance = (int)(sqrt($x1+$y1));
	echo $distance;
?>
<hr>
<h3>CONSTANTA</h3>
<?php
	define('CONSTANTIN', 2156451);
	echo CONSTANTIN;
	if(defined('CONSTANTIN')) {
		echo ' IS READY';
	}
	echo "<br>";
	echo 'FILE IS '.__FILE__;


	class ConstClass {
		const NAME = "Peter";
		public $id;
	}

	$user = new ConstClass;
	$user->id = 234545;
	echo "<br>".$user::NAME;
	echo "<br>".$user->id;
?>