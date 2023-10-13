<?php

class Pendaftaran
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }

    public function tampil(): array
    {
        $string = "SELECT * FROM pendaftaran";
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
            $string = "INSERT INTO pendaftaran (nama, program, tgl_lahir, jk, agama, id_kelas, alamat, no_hp, nm_ayah, nm_ibu, tgl_byr, status)
            value (:nama, :program, :tgl_lahir, :jk, :agama, :id_kelas, :alamat, :no_hp, :nm_ayah, :nm_ibu, :tgl_byr, :status)";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute($data);
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
