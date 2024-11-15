<?php

use Core\App;
use Core\Database;

//$db = App::container()->resolve('Core\Database');
//$db = App::container()->resolve(Database::class);
$db = App::resolve(Database::class);

$id = $_GET['id'];
$currentUserId = 1;

$query = 'SELECT * FROM notes WHERE id = :id';
$note = $db->query($query, [
    'id' => $id
])->findOrFail();

authorize((int)$note['user_id'] === $currentUserId);

$query = 'DELETE FROM notes WHERE id = :id';
$db->query($query, [
    'id' => $_POST['id']
]);

header('location: /notes');
exit();