<?php 


function ambilInventaris($koneksi)
{
    $sql = "SELECT id_inventaris, nama FROM inventaris";

    $res = mysqli_query($koneksi, $sql);

    $data_inventaris = array();

    while($data = mysqli_fetch_assoc($res))
    {
        $data_inventaris[] = $data;
    }

    return $data_inventaris;

}

function ambilPegawai($koneksi)
{
    $sql = "SELECT id_pegawai, nama_pegawai FROM pegawai";

    $res = mysqli_query($koneksi, $sql);

    $data_pegawai = array();

    while ($data = mysqli_fetch_assoc($res)) 
    {
        $data_pegawai[] = $data;
    }

    return $data_pegawai;
}

function ambilPeminjaman($koneksi, $id_pinjam)
{
    $sql = "SELECT * FROM peminjaman INNER JOIN pegawai ON peminjaman.id_pegawai = pegawai.id_pegawai
                                    INNER JOIN inventaris ON peminjaman.id_inventaris = inventaris.id_inventaris
                                    WHERE id_pinjam = $id_pinjam";

    $res = mysqli_query($koneksi, $sql);

    $data = mysqli_fetch_assoc($res);

    return $data;
}

function ambilStok($koneksi, $id_inventaris)
{
    $sql = "SELECT stok FROM inventaris WHERE id_inventaris = $id_inventaris";

    $res = mysqli_query($koneksi, $sql);

    $data = mysqli_fetch_assoc($res);

   return $data['stok'];
}

function cekPinjam($koneksi, $id_pegawai)
{
    $sql = "SELECT * FROM peminjaman WHERE id_pegawai = $id_pegawai AND status = 'Dipinjam'";

    $res = mysqli_query($koneksi, $sql);

    $pinjam = mysqli_affected_rows($koneksi);

    if($pinjam == 0)
        return true;
    else 
        return false;
}

function updateStok($koneksi, $id_inventaris, $stok_update)
{
    $sql = "UPDATE inventaris SET stok = $stok_update WHERE id_inventaris = $id_inventaris";

    $res = mysqli_query($koneksi, $sql);
}

?>