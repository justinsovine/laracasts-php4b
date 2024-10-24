<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>

	<style>
		html {
			margin: 0;
			padding: 0;
		}
		body {
			margin: 20px;
			padding: 0;
			font-family: sans-serif;
		}
	</style>
</head>
<body>
	<h1>Recommended Books</h1>

	<?php
		$books = [
			'Walden; or, Life in the Woods',
			'The Meditations of Marcus Aurelius',
			'Classical Music and Postmodern Knowledge'
		];
	?>

	<ul>
		<?php foreach ($books as $book) : ?>
			<li><?= $book ?></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>