<?php
class Connection
{
    public $conn;
    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=mydb", "root", "123");
        } catch (\Throwable $th) {
            die("Error " . $th->getMessage());
        }
    }
}
