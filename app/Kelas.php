<?php

class Kelas
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }

    public function tampil(): array
    {
        $string = "SELECT * FROM kelas";
        $sql = $this->conn->conn->prepare($string);
        $sql->execute();
        $data = [];
        while ($row = $sql->fetch()) {
            $data[] = $row;
        }
        return $data;
    }

    function tambah($data)
    {
        try {
            $string = "INSERT INTO kelas (tingkat_kelas)
            value (:tingkat_kelas)";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute($data);
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
