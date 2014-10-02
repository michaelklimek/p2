<!DOCTYPE html>

<html>
<head>
	<?php require "logic.php"; ?>
	<title>xkcd Password Generator</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="title">
		<h1>xkcd Password Generator</h1>
		<h2 class="pass">hello-to-the-whole-wide-world</h2>
	</div>
	<div>
		<form action="#" method="GET">
			<ul class="questions">
				Number of Words<input type="text">&#40;Max 9&#41;<br>
				<input type="checkbox">Add a number&#63;<br>
				<input type="checkbox">Add a symbol&#63;<br>
				<input type="submit" value="Generate Password">
			</ul>
		</form>
	</div>
</body>
</html>