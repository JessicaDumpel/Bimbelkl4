<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Tambah Pendaftaran
        </div>
        <div class="card-body">
            <form action="/bimbelkl4/app/proses.php" method="post">
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" class="form-control" name="status">
                </div>

                <div class="form-group">
                    <button type="submit" name="tambah_pendaftaran" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "app/pendaftaran.php";
    $pndftrn = new pendaftaran();
    $pndftrn->tambah($_POST);
    header("Location: http://localhost/index.php/Bimbelkl4/pendaftaran");
}
?>