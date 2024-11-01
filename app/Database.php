<?php

class Database 
{
    private $db_host;
    private $db_name;
    private $db_user;
    private $db_password;
    public $connection;

    public function __construct()
    {
        $this->db_host = getenv('DB_HOST');
        $this->db_name = getenv('DB_NAME');
        $this->db_user = getenv('DB_USER');
        $this->db_password = getenv('DB_PASSWORD');
        $dsn = "mysql:host=$this->db_host;dbname=$this->db_name;charset=utf8mb4";

        $this->connection = new PDO($dsn, $this->db_user, $this->db_password);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}