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
            <a href="/bimbelkl4/index.php/jadwal/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>KELAS</td>
                    <td>HARI</td>
                    <td>JAM_MULAI</td>
                    <td>JAM_SELESAI</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['kelas']; ?></td>
                        <td><?= $item['hari']; ?></td>
                        <td><?= $item['jam_mulai']; ?></td>
                        <td><?= $item['jam_selesai']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>