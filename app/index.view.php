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

	<ul>
		<?php foreach ($filteredBooks as $book) : ?>
			<li>
				<a href="<?= $book['purchaseUrl'] ?>">
					<?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - by <?= $book['author']; ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>