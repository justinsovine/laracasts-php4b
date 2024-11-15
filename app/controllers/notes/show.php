<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$id = $_GET['id'];
$currentUserId = 1;

$query = 'SELECT * FROM notes WHERE id = :id';
$note = $db->query($query, [
    'id' => $id
])->findOrFail();

authorize((int)$note['user_id'] === $currentUserId);

view('notes/show.view.php', [
    'heading' => 'Note',
    'note' => $note
]);