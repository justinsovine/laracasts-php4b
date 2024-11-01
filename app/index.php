<?php

require 'functions.php';
require 'Database.php';
//require 'router.php';


$db = new Database();
$query = "SELECT * FROM posts WHERE id = 1";
$post = $db->query($query)->fetch(PDO::FETCH_ASSOC);

dd($post['title']);