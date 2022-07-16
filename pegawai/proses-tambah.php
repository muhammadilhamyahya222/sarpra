<?php

include '../koneksi.php';

if(isset($_POST['simpan']))
{
    $pegawai = $_POST['nama_pegawai'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $id_level = 3;

    $sql = "INSERT INTO pegawai (nama_pegawai, alamat, telp, id_level) VALUES ('$pegawai', '$alamat', '$telp', '$id_level')";
    
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