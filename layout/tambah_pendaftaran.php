<div class="col-md-12">
    <div class="card">
        <div class="card header">
            Tambah Pendaftaran
        </div>
        <div class="card-body">
            <form action="/Bimbelkl4/app/proses.php" method="post">
                <div class="form-group">
                    <label for="">NAMA</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label for="">PROGRAM</label>
                    <input type="text" class="form-control" name="program">
                </div>
                <div class="form-group">
                    <label for="">TGL_LAHIR</label>
                    <textarea class="form-control" name="tgl_lahir" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">JK</label>
                    <textarea class="form-control" name="jk" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">AGAMA</label>
                    <textarea class="form-control" name="agama" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">ALAMAT</label>
                    <textarea class="form-control" name="alamat" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">NO_HP</label>
                    <textarea class="form-control" name="no_hp" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">NM_AYAH</label>
                    <textarea class="form-control" name="nm_ayah" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">NM_IBU</label>
                    <textarea class="form-control" name="nm_ibu" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">TGL_BAYAR</label>
                    <textarea class="form-control" name="tgl_lahir" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">STATUS</label>
                    <textarea class="form-control" name="status" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
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