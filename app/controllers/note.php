<?php

$config = require 'config.php';
$db = new Database($config['database'], getenv('DB_USER'), getenv('DB_PASSWORD'));

$heading = "Note";

$id = $_GET['id'];
$query = 'SELECT * FROM notes WHERE id = :id';
$note = $db->query($query, ['id' => $id])->fetch();

require "views/note.view.php";