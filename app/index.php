<?php

require 'functions.php';
require 'Database.php';
//require 'router.php';

$config = require 'config.php';
$db = new Database($config['database'], getenv('DB_USER'), getenv('DB_PASSWORD'));

$id = $_GET['id'];
$query = "SELECT * FROM posts WHERE id = :id";

$posts = $db->query($query, [':id' => $id])->fetch();

dd($posts);