<?php

include '../koneksi.php';
include '../aset/header.php';

$sql = "SELECT * FROM pegawai ORDER BY nama_pegawai";
$res = mysqli_query($koneksi, $sql);
$id_pegawai = array();

while ($data = mysqli_fetch_assoc($res)){
    $id_pegawai[] = $data;
}

$id_pegawai = $_GET['id_pegawai'];

$q_pegawai = "SELECT * FROM pegawai WHERE id_pegawai = $id_pegawai";

$hasil_pegawai = mysqli_query($koneksi, $q_pegawai);

$pegawai = mysqli_fetch_assoc($hasil_pegawai);

if(isset($_POST['simpan']))
{
    $pegawai = $_POST['nama_pegawai'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];

    $q_update = "UPDATE pegawai SET nama_pegawai = '$pegawai', alamat = '$alamat', telp = '$telp' WHERE id_pegawai = $id_pegawai";
    
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
                    <h2><i class="far fa-edit"></i> Edit Data Pegawai</h2>
                </div>
                <div class="card-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="nama_pegawai">Nama Pegawai</label>
                        <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" value="<?= $pegawai['nama_pegawai'] ?>" >
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="5" value=""><?= $pegawai['alamat']?></textarea>                    
                    </div>

                    <div class="form-group">
                        <label for="telp">No. Telp</label>
                        <input type="text" class="form-control" name="telp" id="telp" value="<?= $pegawai['telp'] ?>">
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
