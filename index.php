<!doctype html>
<html lang="en">

<head>
    <titl>Bimbelkl4</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/Bimbelkl4">Home &#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/bimbelkl4/index.php/jadwal" class="nav-link">Jadwal &#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/bimbelkl4/index.php/kelas" class="nav-link">Kelas &#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/bimbelkl4/index.php/pembayaran" class="nav-link">Pembayaran &#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/bimbelkl4/index.php/pendaftaran" class="nav-link">Pendaftaran &#160;&#160;&#160;</a>
                </li>
                <li class="nav-item">
                    <a href="/bimbelkl4/index.php/siswa" class="nav-link">Siswa &#160;&#160;&#160;</a>
                </li>
            </ul>
        </nav>
    </header>
    <main role="main" class="mt-6">
        <div class="container">
            <div class="col-md-12">
                <div class="row" style="margin-top : 75px !important;">
                    <?php
                    $project_location = "/bimbelkl4";
                    $me = $project_location;
                    $request = strtok($_SERVER['REQUEST_URI'], "?");
                    switch ($request) {
                        case $me . '/':
                            break;
                        case $me . '/index.php/jadwal':
                            require "layout/jadwal.php";
                            break;
                        case $me . '/index.php/jadwal/add':
                            require "layout/tambah_jadwal.php";
                            break;
                        case $me . '/index.php/kelas':
                            require "layout/kelas.php";
                            break;
                        case $me . '/index.php/kelas/add':
                            require "layout/tambah_kelas.php";
                            break;
                        case $me . '/index.php/pembayaran':
                            require "layout/pembayaran.php";
                            break;
                        case $me . '/index.php/pembayaran/add':
                            require "layout/tambah_pembayaran.php";
                            break;
                        case $me . '/index.php/pendaftaran':
                            require "layout/pendaftaran.php";
                            break;
                        case $me . '/index.php/pendaftaran/add':
                            require "layout/tambah_pendaftaran.php";
                            break;
                        default:
                        case $me . '/index.php/siswa':
                            require "layout/siswa.php";
                            break;
                        case $me . '/index.php/siswa/add':
                            require "layout/tambah_siswa.php";
                            break;
                            http_response_code(404);
                            echo "404";
                            break;
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>