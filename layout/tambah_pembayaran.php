<div class="col-md-12">
    <div class="card">
        <div class="card header">
            Tambah Pembayaran
        </div>
        <div class="card-body">
            <form action="/Bimbelkl4/app/proses.php" method="post">
                <div class="form-group">
                    <label for="">KET</label>
                    <input type="text" class="form-control" name="ket">
                </div>
                <div class="form-group">
                    <label for="">TGL_BAYAR</label>
                    <input type="text" class="form-control" name="tanggal_bayar">
                </div>
                <div class="form-group">
                    <label for="">GAMBAR</label>
                    <textarea class="form-control" name="gambar" rows="3"></textarea>
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
    include "app/pembayaran.php";
    $pmbyrn = new Pembayaran();
    $pmbyrn->tambah($_POST);
    header("Location: http://localhost/index.php/Bimbelkl4/pembayaran");
}
?>