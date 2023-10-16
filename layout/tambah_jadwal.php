<div class="col-md-12">
    <div class="card">
        <div class="card header">
            Tambah Jadwal
        </div>
        <div class="card-body">
            <form action="/Bimbelkl4/app/proses.php" method="post">
                <div class="form-group">
                    <label for="">HARI</label>
                    <input type="text" class="form-control" name="hari">
                </div>
                <div class="form-group">
                    <label for="">JAM</label>
                    <input type="text" class="form-control" name="jam">
                </div>
                <div class="form-group">
                    <label for="">RUANG</label>
                    <textarea class="form-control" name="ruang" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="tambah_jadwal" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "app/Jadwal.php";
    $jdwl = new Jadwal();
    $jdwl->tambah($_POST);
    header("Location: http://localhost/index.php/Bimbelkl4/jadwal");
}
?>