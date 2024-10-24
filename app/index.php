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
				'releaseYear' => 1854,
				'purchaseUrl' => 'http://example1.com'
			],
			[
				'name' => 'Civil Disobedience',
				'author' => 'Thoreau',
				'releaseYear' => 1849,
				'purchaseUrl' => 'http://example2.com'
			],
			[
				'name' => 'Classical Music and Postmodern Knowledge',
				'author' => 'Lawrence Kramer',
				'releaseYear' => 1996,
				'purchaseUrl' => 'http://example3.com'
			],
			[
				'name' => 'Musical Meaning: Toward a Critical History',
				'author' => 'Lawrence Kramer',
				'releaseYear' => 2002,
				'purchaseUrl' => 'http://example4.com'
			],
			[
				'name' => 'Why Classical Music Still Matters',
				'author' => 'Lawrence Kramer',
				'releaseYear' => 2007,
				'purchaseUrl' => 'http://example5.com'
			],
		];

		function filterByAuthor($books, $author) {
			$filteredBooks = [];

			foreach ($books as $book) {
				if ($book['author'] === $author) {
					$filteredBooks[] = $book;
				}
			}

			return $filteredBooks;
		}
	?>

	<ul>
		<?php foreach (filterByAuthor($books, 'Thoreau') as $book) : ?>
			<li>
				<a href="<?= $book['purchaseUrl'] ?>">
					<?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - by <?= $book['author']; ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>