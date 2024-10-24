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
			[
				'name' => 'Walden; or, Life in the Woods',
				'author' => 'Thoreau',
				'purchaseUrl' => 'http://example1.com'
			],
			[
				'name' => 'Classical Music and Postmodern Knowledge',
				'author' => 'Lawrence Kramer',
				'purchaseUrl' => 'http://example2.com'
			]			
		];
	?>

	<ul>
		<?php foreach ($books as $book) : ?>
			<li>
				<a href="<?= $book['purchaseUrl'] ?>">
					<?= $book['name'] ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>