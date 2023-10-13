<?php
class Connection
{
    public $conn;
    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=akademik043", "root", "");
        } catch (\Throwable $th) {
            die("Error " . $th->getMessage());
        }
    }
}
