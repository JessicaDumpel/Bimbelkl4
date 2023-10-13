<?php
include "inc/Connection.php";
include "app/Kelas.php";
$kls = new Kelas();
$data = $kls->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="class card-header d-flex justify-content-between">
            <h4>Kelas</h4>
            <a href="/Bimbelkl4/index.php/kelas/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-header">Kelas</div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>TINGKAT_KELAS</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['tingkat_kelas']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>