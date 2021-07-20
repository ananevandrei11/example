<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SEND MAIL</title>
</head>
<style>
	input, select, textarea {
		display: block;
		width: 50vw;
		min-height: 5vh;
		margin: 10px 0px;
		box-sizing: border-box;
	}
	textarea {
		resize: none;
	}
</style>
<body>
	<a href="../">BACK</a>
	<h1>SEND MAIL</h1>
	<form action="send.php" method="POST">
		<select name="subject" id="">
			<option disabled selected>THEME</option>
			<option value="LESSON">LESSON</option>
			<option value="LIFE">LIFE</option>
			<option value="WORK">WORK</option>
		</select>
		<input type="email" name="email" maxlength="50" placeholder="EMAIL@EMAIL" required>
		<textarea name="msg" id="" cols="30" rows="10" maxlength="140" required placeholder="MESSAGE"></textarea>
		<div>CAPTCHA 7*8</div>
		<input type="number" name="captcha" id="" maxlength="3" placeholder="ANSWER" required>
		<input type="submit" value="SEND MAIL">
	</form>
</body>
</html>