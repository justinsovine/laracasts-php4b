<?php

require 'Validator.php';

$config = require 'config.php';
$db = new Database($config['database'], getenv('DB_USER'), getenv('DB_PASSWORD'));

$heading = "Create Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    
    if (! Validator::string($_POST['body'], 1, 1000) ) {
        $errors['body'] = 'A body of no more than 1,000 characters is required.';
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