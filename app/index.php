<?php

require 'functions.php';
require 'Database.php';
//require 'router.php';

$config = require 'config.php';

$db = new Database($config['database'], getenv('DB_USER'), getenv('DB_PASSWORD'));
$query = "SELECT * FROM posts WHERE id = 1";
$post = $db->query($query)->fetch();

dd($post['title']);