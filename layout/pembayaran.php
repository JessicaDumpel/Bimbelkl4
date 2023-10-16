<?php
include "inc/Connection.php";
include "app/Pembayaran.php";
$pmbyrn = new Pembayaran();
$data = $pmbyrn->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="class card-header d-flex justify-content-between">
            <h4>Pembayaran</h4>
            <a href="/Bimbelkl4/index.php/pembayaran/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-header">Pembayaran</div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>KET</td>
                    <td>TGL_BAYAR</td>
                    <td>GAMBAR</td>
                    <td>STATUS</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['ket']; ?></td>
                        <td><?= $item['tgl_bayar']; ?></td>
                        <td><?= $item['gambar']; ?></td>
                        <td><?= $item['status']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>