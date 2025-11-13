<?php
class Database {
    private static ?Database $instance = null;
    private $connection;

    private function __construct() {
        $this->connection = new mysqli(
            $_ENV['DB_HOST'],
            $_ENV['ADMIN_DB_USER'],
            $_ENV['ADMIN_DB_PASS'],
            $_ENV['DB_NAME']
        );

        if ($this->connection->connect_error) {
            throw new RuntimeException("Connection failed: " . $this->connection->connect_error);
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}