<?php 

include '../koneksi.php';
include 'fungsi.php';

$id_pinjam = $_POST['id_pinjam'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = NULL;

if(isset($_POST['tgl_kembali']))
{
    $tgl_kembali = $_POST['tgl_kembali'];
    $sql = "UPDATE peminjaman SET tgl_pinjam = '$tgl_pinjam' tgl_kembali = '$tgl_kembali' WHERE id_pinjam = $id_pinjam";
}
else
{
    $sql = "UPDATE peminjaman SET tgl_pinjam = '$tgl_pinjam' 
            WHERE id_pinjam = $id_pinjam";
}

$res = mysqli_query($koneksi, $sql);

$count = mysqli_affected_rows($koneksi);

if($count == 1)
{
    header("Location: index.php");
}
else
{
    header("Location: index.php");
}

?>