<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database'], getenv('DB_USER'), getenv('DB_PASSWORD'));

$currentUserId = 1;

$id = $_GET['id'];
$user_id = 1;

$query = 'SELECT * FROM notes WHERE id = :id';
$note = $db->query($query, [
    'id' => $id
])->findOrFail();

authorize((int)$note['user_id'] === $currentUserId);

view('notes/show.view.php', [
    'heading' => 'Note',
    'note' => $note
]);