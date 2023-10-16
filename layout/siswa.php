<?php
include "inc/Connection.php";
include "app/Siswa.php";
$sw = new Siswa();
$data = $sw->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="class card-header d-flex justify-content-between">
            <h4>Siswa</h4>
            <a href="/bimbelkl4/index.php/siswa/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>NAMA</td>
                    <td>KET</td>
                    <td>TANGGAL_LAHIR</td>
                    <td>JENIS_KELAMIN</td>
                    <td>AGAMA</td>
                    <td>KELAS</td>
                    <td>ALAMAT</td>
                    <td>NO_HP</td>
                    <td>NAMA_AYAH</td>
                    <td>NAMA_IBU</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['nama']; ?></td>
                        <td><?= $item['ket']; ?></td>
                        <td><?= $item['tanggal_lahir']; ?></td>
                        <td><?= $item['jenis_kelamin']; ?></td>
                        <td><?= $item['agama']; ?></td>
                        <td><?= $item['kelas']; ?></td>
                        <td><?= $item['alamat']; ?></td>
                        <td><?= $item['no_hp']; ?></td>
                        <td><?= $item['nama_ayah']; ?></td>
                        <td><?= $item['nama_ibu']; ?></td>
                        <td>
                            <a href="/Bimbelkl4/index.php/siswa/ubah?idsiswa=<?= $item['idsiswa'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/Bimbelkl4/app/proses?hapus=siswa&idsiswa=<?= $item['idsiswa'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>