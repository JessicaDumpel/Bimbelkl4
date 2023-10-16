<?php
include "../inc/Connection.php";
if (isset($_POST['tambah_jadwal'])) {
    include "Jadwal.php";
    $jdwl = new Jadwal();
    // Mapping data
    $data = [
        "kelas" => $_POST['kelas'],
        "hari" => $_POST['hari'],
        "jam_mulai" => $_POST['jam_mulai'],
        "jam_selesai" => $_POST['jam_selesai'],
    ];
    // Proses Tambah
    $jdwl->tambah($data);
    header("Location: http://localhost/bimbelkl4/index.php/jadwal");
} else if (isset($_POST['tambah_kelas'])) {
    include "Kelas.php";
    $kls = new Kelas();
    // Mapping data
    $data = [
        "jadwal" => $_POST['jadwal'],
        "siswa" => $_POST['siswa'],
    ];
    // Proses Tambah
    $kls->tambah($data);
    header("Location: http://localhost/bimbelkl4/index.php/kelas");
} else if (isset($_POST['tambah_pembayaran'])) {
    include "Pembayaran.php";
    $pmbyrn = new Pembayaran();
    // Mapping data
    $data = [
        "ket" => $_POST['ket'],
        "tgl_bayar" => $_POST['tgl_bayar'],
        "gambar" => $_POST['gambar'],
        "status" => $_POST['status']
    ];
    // Proses Tambah
    $pmbyrn->tambah($data);
    header("Location: http://localhost/bimbelkl4/index.php/pembayaran");
} else if (isset($_POST['tambah_pendaftaran'])) {
    include "Pendaftaran.php";
    $pndftrn = new Pendaftaran();
    // Mapping data
    $data = [
        "tanggal" => $_POST['tanggal'],
        "status" => $_POST['status'],
    ];
    $pndftrn->tambah($data);
    header("Location: http://localhost/bimbelkl4/index.php/pendaftaran");
} else if (isset($_POST['tambah_siswa']))
    include "Siswa.php";
$sw = new Siswa();
// Mapping data
$data = [
    "nama" => $_POST['nama'],
    "ket" => $_POST['ket'],
    "tanggal_lahir" => $_POST['tanggal_lahir'],
    "jenis_kelamin" => $_POST['jenis_kelamin'],
    "agama" => $_POST['agama'],
    "kelas" => $_POST['kelas'],
    "alamat" => $_POST['alamat'],
    "no_hp" => $_POST['no_hp'],
    "nama_ayah" => $_POST['nama_ayah'],
    "nama_ibu" => $_POST['nama_ibu'],
];
// Proses Tambah
$sw->tambah($data);
header("Location: http://localhost/bimbelkl4/index.php/siswa");
