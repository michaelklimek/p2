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
		<p>Generate a xkcd password based on the selections below.</p>
		<p>&#40;See the comic below for an example of a xkcd password&#41;</p>
		<h2 class="pass"><?php for ($i = 0; $i < $words; $i++): ?> 
			<?=$i?>
		<?php endfor; ?></h2>
	</div>
	<div>
		<form action="index.php" method="GET">
			<ul class="questions">
				Number of Words
				<select name="words">
					<?php for ($i=4; $i <= 9; $i++): ?>
						<option value="<?=$i?>"><?=$i?></option>
					<?php endfor; ?>
				</select>&#40;Max 9&#41;<br>
				<input type="checkbox">Add a number&#63;<br>
				<input type="checkbox">Add a symbol&#63;<br>
				<input type="submit" value="Generate Password">
			</ul>
		</form>
	</div>
	<div class="comic">
		<img src="img/comic.png">
	</div>
</body>
</html>