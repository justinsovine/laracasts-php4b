<?php

require 'functions.php';
//require 'router.php';

// connect to database
$db_host = getenv('DB_HOST');
$db_name = getenv('DB_NAME');
$db_user = getenv('DB_USER');
$db_password = getenv('DB_PASSWORD');

$dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4";
$pdo = new PDO($dsn, $db_user, $db_password);

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}