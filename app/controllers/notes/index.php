<?php

$config = require base_path('config.php');
$db = new Database($config['database'], getenv('DB_USER'), getenv('DB_PASSWORD'));

$query = 'SELECT * FROM notes WHERE user_id = 1';
$notes = $db->query($query)->get();

view('notes/index.view.php', [
    'heading' => 'My Notes',
    'notes' => $notes
]);