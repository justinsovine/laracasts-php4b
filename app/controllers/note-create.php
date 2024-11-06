<?php

$config = require 'config.php';
$db = new Database($config['database'], getenv('DB_USER'), getenv('DB_PASSWORD'));

$heading = "Create Note";

if ($_POST) {
    $errors = [];
    if (strlen($_POST['body']) === 0) {
        $errors['body'] = 'A body is required.';
    }
    if (strlen($_POST['body']) > 1000) {
        $errors['body'] = 'The body can not be more than 1,000 characters.';
    }

    if (empty($errors)) {
        $query = 'INSERT INTO notes(body, user_id) VALUES(:body, :user_id)';
        $notes = $db->query($query, [
            ':body' => $_POST['body'],
            ':user_id' => 1
        ])->get();
    }
}

require "views/note-create.view.php";