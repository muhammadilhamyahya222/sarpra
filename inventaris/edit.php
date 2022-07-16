<?php

include '../koneksi.php';
include '../aset/header.php';

$sql = "SELECT * FROM inventaris ORDER BY nama";
$res = mysqli_query($koneksi, $sql);
$id_inventaris = array();

while ($data = mysqli_fetch_assoc($res)){
    $id_inventaris[] = $data;
}

$id_inventaris = $_GET['id_inventaris'];

$q_inventaris = "SELECT * FROM inventaris WHERE id_inventaris = $id_inventaris";

$hasil_inventaris = mysqli_query($koneksi, $q_inventaris);

$inventaris = mysqli_fetch_assoc($hasil_inventaris);

if(isset($_POST['simpan']))
{
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];

    $q_update = "UPDATE inventaris SET nama = '$nama', deskripsi = '$deskripsi', stok = '$stok' WHERE id_inventaris = $id_inventaris";
    
    $hasil_update = mysqli_query($koneksi, $q_update);

    $cek = mysqli_affected_rows($koneksi);

    if($cek >= 0)
    {
        $_SESSION['pesan']['isi'] = "Data berhasil diubah";
        $_SESSION['pesan']['warna'] = "success";
    }
    else
    {
        $_SESSION['pesan']['isi'] = "Data gagal diubah";
        $_SESSION['pesan']['warna'] = "danger";
        echo "Gagal update data";
    }
    header("Location: index.php");
}

?>
<div class="pagewrap-overlay"></div>
<div class="container">
        <div class="row mt-4">
            <div class="col-md-9">
                <div class="card">
                <div class="card-header">
                    <h2><i class="far fa-edit"></i> Edit Data Inventaris</h2>
                </div>
                <div class="card-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?= $inventaris['nama'] ?>" >
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="5" value=""><?= $inventaris['deskripsi']?></textarea>                    
                    </div>

                    <div class="form-group">
                        <label for="stok">Jumlah</label>
                        <input type="number" class="form-control" name="stok" id="stok" value="<?= $inventaris['stok'] ?>">
                    </div>

                
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>

<?php





include '../aset/footer.php';

?>
