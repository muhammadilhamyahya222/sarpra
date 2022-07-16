<?php
include 'aset/header.php';
include 'koneksi.php';

$sql_inventaris = "SELECT * FROM inventaris";
$res_inventaris = mysqli_query($koneksi, $sql_inventaris);

$count_inventaris = mysqli_affected_rows($koneksi);

$sql_pegawai = "SELECT * FROM pegawai";
$res_pegawai = mysqli_query($koneksi, $sql_pegawai);

$count_pegawai = mysqli_affected_rows($koneksi);

$sql_peminjaman = "SELECT * FROM peminjaman";
$res_peminjaman = mysqli_query($koneksi, $sql_peminjaman);

$count_peminjaman = mysqli_affected_rows($koneksi);
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        <h2><i class="far fa-chart-bar"></i> Dashboard</h2>
        <hr class="bg-light">
    </div>
    </div>

    <div class="row">
        <div class="col-md-4">
        <div class="card bg-danger" style="width: 18rem;">
            <div class="card-body text-white">
              <h5 class="card-title">Jumlah Inventaris</h5>
              <p class="card-text" style="font-size:60px"><?= $count_inventaris ?></p>
              <a href="http://localhost/sarpra/inventaris/index.php"" class="text-white">Lebih Detail <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card bg-warning" style="width: 18rem;">
            <div class="card-body text-white">
              <h5 class="card-title">Jumlah Pegawai</h5>
              <p class="card-text" style="font-size:60px"><?= $count_pegawai ?></p>
              <a href="http://localhost/sarpra/pegawai/index.php"" class="text-white">Lebih Detail <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card bg-info" style="width: 18rem;">
            <div class="card-body text-white">
              <h5 class="card-title">Jumlah Transaksi</h5>
              <p class="card-text" style="font-size:60px"><?= $count_peminjaman ?></p>
              <a href="http://localhost/sarpra/transaksi/index.php"" class="text-white">Lebih Detail <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
</div>

<?php
include 'aset/footer.php';
?>