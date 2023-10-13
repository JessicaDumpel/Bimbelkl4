<?php

class Pembayaran
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }

    public function tampil(): array
    {
        $string = "SELECT * FROM pembayaran";
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
            $string = "INSERT INTO pembayaran (id_pendaftaran, ket, tgl_bayar, gambar, status)
            value (:id_pendaftaran, :ket, :tgl_bayar, :gambar, :status)";
            $sql = $this->conn->conn->prepare($string);
            $sql->execute($data);
            return true;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
