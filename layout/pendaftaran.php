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
            <a href="/Bimbelkl4/index.php/pendaftaran/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-header">Pendaftaran</div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>NAMA</td>
                    <td>PROGRAM</td>
                    <td>TGL_LAHIR</td>
                    <td>JK</td>
                    <td>AGAMA</td>
                    <td>ID_KELAS</td>
                    <td>ALAMAT</td>
                    <td>NO_HP</td>
                    <td>NM_AYAH</td>
                    <td>NM_IBU</td>
                    <td>TGL_BAYAR</td>
                    <td>STATUS</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $item['nama']; ?></td>
                        <td><?= $item['program']; ?></td>
                        <td><?= $item['tgl_lahir']; ?></td>
                        <td><?= $item['jk']; ?></td>
                        <td><?= $item['agama']; ?></td>
                        <td><?= $item['id_kelas']; ?></td>
                        <td><?= $item['alamat']; ?></td>
                        <td><?= $item['no_hp']; ?></td>
                        <td><?= $item['nm_ayah']; ?></td>
                        <td><?= $item['nm_ibu']; ?></td>
                        <td><?= $item['tgl_bayar']; ?></td>
                        <td><?= $item['status']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>