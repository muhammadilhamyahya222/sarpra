<?php 

    include '../koneksi.php';

    $id_pinjam = $_GET['id_pinjam'];

    $query = "DELETE FROM peminjaman WHERE id_pinjam = $id_pinjam";

    $hasil = mysqli_query($koneksi, $query);

    $cek = mysqli_affected_rows($koneksi);

    if($cek == 1)
    {
        header("Location: index.php");
    }
    else
    {
        echo "Gagal hapus data";
    }
?>