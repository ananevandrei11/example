<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Document</title>
</head>
<body>
	<?php
	// Поразрядные операторы
		$x1 = 6;
		$x2 = 10;
		echo $x1 | $x2;
		echo "<hr>";
		echo 6 << 1;
		echo "<hr>";
		// Сравнения
		$y1 = 1;
		$y2 = '1';
		echo $y1 == $y2;		
		echo "<hr>";
		echo $y1 <=> $y2;
		echo "<hr>";
    echo $y1 <> $y2;
    
    if ($x1 == 0) {
      echo 'True';
    } elseif ($y1 == 1) {
      echo 'False';
    } else {
      echo 'I do not know';
    }

		echo '<hr>';
		$ex = null;
		$ex = $ex ?? 'nullik';
		echo $ex;
?>
<section>
  <a href="../les1/index.php">LES 1</a>
</section>
</body>
</html>
