<?php

class Connection {
    private $connection;

    public function __construct() {
        try {
            $this -> connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' .DB_NAME . ';' . DB_CHARSET, DB_USER, DB_PASSWORD);
        } catch (Exception $exception) {
            echo "Error: {$exception->getMessage()}";
        }
    }

    public function getConnection():object {
        return $this->connection;
    }
}

?>