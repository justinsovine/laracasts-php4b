<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database'], getenv('DB_USER'), getenv('DB_PASSWORD'));

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