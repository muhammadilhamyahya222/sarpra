<?php
session_start();
if(!isset($_SESSION['login']))
{
    header("Location: http://localhost/sarpra/login/");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="http://localhost/sarpra/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/sarpra/aset/fontawesome/css/all.min.css">

    <title> SARPRA</title>
</head>
<body>

    <script src="http://localhost/siperpus/aset/jquery.js"></script>
    <script src="http://localhost/siperpus/aset/bootstrap/js/bootstrap.min.js"></script>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><i class="fab fa-earlybirds"></i> SARPRA | Hai, Sobat</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="http://localhost/sarpra/index.php">Home</a>
      <a class="nav-item nav-link" href="http://localhost/sarpra/inventaris/index.php">Inventaris</a>
      <a class="nav-item nav-link" href="http://localhost/sarpra/pegawai/index.php">Pegawai</a>
      <a class="nav-item nav-link" href="http://localhost/sarpra/transaksi/index.php">Peminjaman</a>
      <a class="nav-item nav-link" onclick="return confirm('Apakah Anda Yakin Ingin Logout?')" href="http://localhost/sarpra/login/logout.php">Logout</a>
    </div>
  </div>
      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
</nav>
</body>
</html>