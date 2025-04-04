<?php

use Core\App;
use Core\Validator;
use Core\Database;

$email = $_POST['email'];
$password = $_POST['password'];

// validate the form inputs
$errors = [];
if (! Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (! Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a password of at least seven characters.';
}

if (! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);
// check if the account already exists
$query = 'SELECT * FROM users WHERE email = :email';
$user = $db->query($query, [
    'email' => $email
])->find();

if ($user) {
    // then someone with that email already exists and has an account
    // if yes, redirect to a login page 
    header('location: /');
    exit();
} else {
    // if not, save one to the database, and then log the user in, and redirect
    $query = 'INSERT INTO users (email, password) VALUES (:email, :password)';
    $db->query($query, [
        'email' => $email,
        'password' => $password
    ]);

    // mark that the user has logged in
    $_SESSION['user'] = [
        'email' => $email
    ];

    header('location: /');
    exit();
}
