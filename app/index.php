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

// Replaced with array_filter()
// function filter($items, $fn) {
// 	$filteredItems = [];

// 	foreach ($items as $item) {
// 		if ($fn($item)) {
// 			$filteredItems[] = $item;
// 		}
// 	}

// 	return $filteredItems;
// }

$filteredBooks = array_filter($books, function($book) {
	return $book['releaseYear'] >= 1854;
});

require "index.view.php";