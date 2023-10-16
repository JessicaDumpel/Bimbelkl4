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
            <a href="/Bimbelkl4/index.php/siswa/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-header">Siswa</div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>No</td>
                    <td>Nama Siswa</td>
                    <td>Keterangan</td>
                    <td>Action</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['nama']; ?></td>
                        <td><?= $item['ket']; ?></td>
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