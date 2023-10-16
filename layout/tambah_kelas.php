<div class="col-md-12">
    <div class="card">
        <div class="card header">
            Tambah Kelas
        </div>
        <div class="card-body">
            <form action="/Bimbelkl4/app/proses.php" method="post">
                <div class="form-group">
                    <label for="">TINGKAT_KELAS</label>
                    <input type="text" class="form-control" name="tingkat kelas">
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
    include "app/Mahasiswa.php";
    $kls = new Kelas();
    $kls->tambah($_POST);
    header("Location: http://localhost/index.php/Bimbelkl4/kelas");
}
?>