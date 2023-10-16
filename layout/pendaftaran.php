<?php
include "inc/Connection.php";
include "app/Pendaftaran.php";
$pndftrn = new Pendaftaran();
$data = $pndftrn->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="class card-header d-flex justify-content-between">
            <h4>Pendaftaran</h4>
            <a href="/bimbelkl4/index.php/pendaftaran/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>TANGGAL</td>
                    <td>STATUS</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['tanggal_date']; ?></td>
                        <td><?= $item['status']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>