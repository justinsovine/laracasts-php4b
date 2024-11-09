<?php

$config = require 'config.php';
$db = new Database($config['database'], getenv('DB_USER'), getenv('DB_PASSWORD'));

$heading = "Note";
$currentUserId = 1;

$id = $_GET['id'];
$user_id = 1;

$query = 'SELECT * FROM notes WHERE id = :id';
$note = $db->query($query, [
    'id' => $id
])->findOrFail();

authorize((int)$note['user_id'] === $currentUserId);

require "views/notes/show.view.php";