<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Tambah Kelas
        </div>
        <div class="card-body">
            <form action="/bimbelkl4/app/proses.php" method="post">
                <div class="form-group">
                    <label for="">JADWAL</label>
                    <input type="text" class="form-control" name="jadwal">
                </div>
                <div class="form-group">
                    <label for="">SISWA</label>
                    <input type="text" class="form-control" name="siswa">
                </div>
                <div class="form-group">
                    <button type="submit" name="tambah_kelas" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "app/kelas.php";
    $kls = new Kelas();
    $kls->tambah($_POST);
    header("Location: http://localhost/index.php/Bimbelkl4/kelas");
}
?>