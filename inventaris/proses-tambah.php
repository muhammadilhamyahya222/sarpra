<?php

include '../koneksi.php';

if(isset($_POST['simpan']))
{
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];
    $id_jenis = 1;

    $sql = "INSERT INTO inventaris (nama, deskripsi, stok, id_jenis) VALUES ('$nama', '$deskripsi', $stok, '$id_jenis')";
    
    $res = mysqli_query($koneksi, $sql);

    $count = mysqli_affected_rows($koneksi);

    if($count == 1)
    {
        header("Location: index.php");
    }
    else {
        header("Location: tambah.php");
    }
}
else
{
    header("Location: tambah.php");
}

?>