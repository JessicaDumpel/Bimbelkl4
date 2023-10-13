<?php
include "inc/Connection.php";
include "app/Jadwal.php";
$jdwl = new Jadwal();
$data = $jdwl->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="class card-header d-flex justify-content-between">
            <h4>Jadwal</h4>
            <a href="/Bimbelkl4/index.php/jadwal/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-header">Jadwal</div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>ID_KELAS</td>
                    <td>HARI</td>
                    <td>JAM</td>
                    <td>RUANG</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['id_kelas']; ?></td>
                        <td><?= $item['hari']; ?></td>
                        <td><?= $item['jam']; ?></td>
                        <td><?= $item['ruang']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>