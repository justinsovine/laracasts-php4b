<?php

return [
    'database' => [
        'host' => getenv('DB_HOST'),
        'port' => 3306,
        'dbname' => getenv('DB_NAME'),
        'charset' => 'utf8mb4'
    ]
];