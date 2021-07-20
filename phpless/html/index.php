<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.div {
			width: 80vw;
			margin: 0 auto;
			background-color: aquamarine;
			margin-top: 10px;
			margin-bottom: 10px;
		}

		.div2 {
			background-color: yellow;
		}
		.div3 {
			background-color: indigo;
		}
		.div4 {
			background-color: forestgreen;
		}
		input {
			margin-left: 10px;
			margin-top: 10px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<a href="../">BACK</a>
	<form action="handler.php" method="get">
		MESSAGE:<br>
		<textarea name="msg" id="" cols="30" rows="10"></textarea>
		<br>
		<input type="submit" value="Add">
	</form>
	<div class="div div1">
	<?php
		printf('Number - #%X%X%X', 26, 26, 25);
		echo "<br>";
		$str = 'Name, Lastname, Midlename';
		$arr = explode(',', $str);
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
		echo "<pre>";
		print_r(implode(' -', $arr));
		echo "</pre>";
	?>
	</div>
	<div class="div div2">
	<form method="POST">
		<!-- htmlspecialchars Для безопасности-->
		<input type="text" name="first" value="">
		<br>
		<input type="text" name="second" value="">
		<br>
		<input type="submit" value="Submit">

		<?php
		$error = [];
		
		if(!empty($_POST)) { // не пусто
			$first = htmlspecialchars($_POST['first'], ENT_QUOTES);
			$second = htmlspecialchars($_POST['second'], ENT_QUOTES);
			if(empty($first) && empty($second)) { 
				$error[] = 'Nothing first && second';
			} elseif (empty($first) && !empty($second)) {
				$error[] = 'Nothing first';
			} elseif (!empty($first) && empty($second)) {
				$error[] = 'Nothing second';
			}

			if(empty($error)) {
				echo htmlspecialchars(print_r($_POST));
			}
		} else {
			echo "Clear";
		}

		if(!empty($error)) {
			foreach($error as $err) {
				echo "<br><span style='color:red;'>$err</span><br>";
			}
		}
		?>
	</form>
	</div>


	<div class="div div3">
		<form action="check.php" method="POST">
			<input type="checkbox" name="html" id="" checked>HTML<br>
			<input type="checkbox" name="css" id="">CSS<br>
			<input type="checkbox" name="js" id="" checked>JS<br>
			<input type="checkbox" name="php" id="">PHP<br>
			<select name="fst[]" id="" multiple size="3">
				<option value="1" selected>One point</option>
				<option value="2">Two point</option>
				<option value="3">Three point</option>
			</select><br>
			<select name="snd" id="">
				<option value="One">One point</option>
				<option value="Two">Two point</option>
				<option value="Three">Three point</option>
			</select><br>
			<input type="radio" name="gender" value="male" checked>MALE<br>
			<input type="radio" name="gender" value="female">FEMALE<br>
			<input type="radio" name="gender" value="other">OTHER<br>
			<input type="submit" value="Submit">
		</form>
	</div>

	<div class="div div4">
		<form action="load.php" method="post" enctype="multipart/form-data">
			<label for="load">Add file</label><br>
			<input type="file" name="load" id="load" size=""><br>
			<input type="submit" value="Submit">
		</form>
	</div>

</body>
</html>