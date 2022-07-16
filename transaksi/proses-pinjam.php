<?php 

include '../koneksi.php';
include 'fungsi-transaksi.php';

if(isset($_POST['btnPinjam']))
{
    $id_pegawai = $_POST['id_pegawai'];
    $id_inventaris = $_POST['id_inventaris'];
    $tgl_pinjam = $_POST['tgl_pinjam'];

    $sql = "INSERT INTO peminjaman (id_pegawai, id_inventaris, tgl_pinjam, id_petugas)
            VALUES ($id_pegawai, $id_inventaris, '$tgl_pinjam', 1)";

    $stok = ambilStok($koneksi, $id_inventaris);
    
    if (cekPinjam($koneksi, $id_pegawai) && $stok > 0) 
    {
        $res = mysqli_query($koneksi, $sql);

        $count = mysqli_affected_rows($koneksi);

        $stok_update = $stok - 1;

        if($count == 1)
        {
            updateStok($koneksi, $id_inventaris, $stok_update);
            header("Location: index.php");
        }
    }
    else
    {
        header("Loaction: index.php");
        echo("Maaf stok habis");
        
    }

}
else
{
    header("Location: form-pinjam.php");
}

?>