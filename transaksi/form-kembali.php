<?php 

include '../aset/header.php';
include '../koneksi.php';

$id_pinjam = $_GET['id_pinjam'];
$id_inventaris = $_GET['id_inventaris'];

$sql = "SELECT nama FROM inventaris WHERE id_inventaris = $id_inventaris";

$res = mysqli_query($koneksi, $sql);

$data = mysqli_fetch_assoc($res);

?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">

            <div class="card">
            <h5 class="card-header">Form Pengembalian</h5>
                <div class="card-body">
                <form action="proses-kembali.php" method="post">
                    <div class="form-group">
                        <label for="judul">Nama Barang</label>
                        <input class="form-control" type="text" disabled value="<?= $data['nama'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="tgl_kembali">Tanggal Kembali</label>
                        <input type="date" class="form-control" name="tgl_kembali">
                    </div>
                    <input type="hidden" name="id_pinjam" value="<?= $id_pinjam ?>">
                    <input type="hidden" name="id_inventaris" value="<?= $id_inventaris ?>">
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 

include '../aset/footer.php';

?>