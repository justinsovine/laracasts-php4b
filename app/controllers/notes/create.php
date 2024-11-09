<?php

require base_path('Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database'], getenv('DB_USER'), getenv('DB_PASSWORD'));

$errors = [];
$notes = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
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

view('notes/create.view.php', [
    'heading' => 'Create Note',
    'notes' => $notes,
    'errors' => $errors
]);