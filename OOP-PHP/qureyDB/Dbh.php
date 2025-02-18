<?php

class Dbh{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $db = "test";

    protected function connect(){
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->db}";
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
            die("Database Connection Failed: " . $e->getMessage());
        }
    }

    public function testConnect(){
        return $this->connect();
    }
    
}