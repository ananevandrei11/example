<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= "NEW PAGE"; ?></title>
</head>
<body>
	<?php
		echo 'Current date: </br>';
		echo date(DATE_RSS);
	?>
	<br>
	<?php
		if(mt_rand(0,1)) {
			?>
			<p style="color: red">RED</p>
			<?php
		} else {
			?>
			<p style="color: blue">BLUE</p>
			<?php
		}
		if(mt_rand(0,1)) {
			echo('<p style="color: red">RED</p>');
			#red
			/* 
				sadasd
				asdasd
				sadsad
				asdsd
			*/
		} else {
			//blue
			echo('<p style="color: blue">BLUE</p>');
		} 
	?>
</body>
</html>