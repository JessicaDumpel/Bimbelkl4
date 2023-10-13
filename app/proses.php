<?php
include "../inc/Connection.php";
if (isset($_POST['tambah_jadwal'])) {
    include "Jadwal.php";
    $jdwl = new jadwal();
    $data = [
        "id_kelas" => $_POST['id_kelas']
    ];
    $sw->tambah($data);
    header("Location: http://localhost/index.php/Bimbelkl4/siswa");
} else if (isset($_POST['tambah_kelas'])) {
    include "Kelas.php";
    $kls = new Kelas();
    $data = [
        "tingkat_kelas" => $_POST['tingkat_kelas']
    ];
    $kls->tambah($data);
    header("Location: http://localhost/index.php/Bimbelkl4/siswa");
} else if (isset($_POST['tambah_pembayaran'])) {
    include "Pembayaran.php";
    $pmbyrn = new Pembayaran();
    $data = [
        "ket" => $_POST['ket']
    ];
    $pmbryn->tambah($data);
    header("Location: http://localhost/index.php/Bimbelkl4/siswa");
} else if (isset($_POST['tambah_pendaftaran'])) {
    include "Pendaftaran.php";
    $pndftrn = new Pendaftaran();
    $data = [
        "nama" => $_POST['nama']
    ];
    $pndftrn->tambah($data);
    header("Location: http://localhost/index.php/Bimbelkl4/siswa");
} else if (isset($_POST['tambah_siswa'])) {
    include "Siswa.php";
    $sw = new Siswa();
    $data = [
        "ket" => $_POST['ket']
    ];
    $sw->tambah($data);
    header("Location: http://localhost/index.php/Bimbelkl4/siswa");
}
