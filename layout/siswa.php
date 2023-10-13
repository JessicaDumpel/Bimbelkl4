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
                    <td>ID_PENDAFTARAN</td>
                    <td>KET</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['id_pendaftaran']; ?></td>
                        <td><?= $item['ket']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>