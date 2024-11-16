<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;
$errors = [];

// Find the corresponding note
$query = 'SELECT * FROM notes WHERE id = :id';
$note = $db->query($query, [
    'id' => $_POST['id']
])->findOrFail();

// Authorize that the user can edit the note
authorize((int)$note['user_id'] === $currentUserId);

// Validate the form
if (! Validator::string($_POST['body'], 1, 1000) ) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
}    

// If no validation errors, update the record in the notes database table
if (!empty($errors)) {
    return view('notes/edit.view.php', [
        'heading' => 'Edit Note',
        'note' => $note,
        'errors' => $errors
    ]);
}

$query = 'UPDATE notes SET body = :body WHERE id = :id';
$db->query($query, [
    'body' => $_POST['body'],
    'id' => $_POST['id']
]);

// Redirect the user
header('location: /notes');
exit();