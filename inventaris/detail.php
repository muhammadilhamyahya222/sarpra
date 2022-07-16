<?php 

include '../aset/header.php';
include '../koneksi.php';

$id_inventaris = $_GET['id_inventaris'];

$sql = "SELECT * FROM inventaris INNER JOIN jenis ON inventaris.id_jenis = inventaris.id_jenis WHERE id_inventaris = $id_inventaris";

$res = mysqli_query($koneksi, $sql);

$detail = mysqli_fetch_assoc($res);

?>

<?php 

include '../aset/footer.php';

?>
<div class="pagewrap-overlay"></div>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-7">
            <h2>Detail Item</h2>
            <hr class="bg-light">
                <table class="table table-bordered">
                    <tr>
                        <td><strong>Nama</strong></td>
                        <td><?= $detail['nama'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Deskripsi</strong></td>
                        <td>
                        <?= $detail['deskripsi'] ?>
                        </td>
                    </tr>

                    <tr>
                        <td><strong>Stok</strong></td>
                        <td><?= $detail['stok'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-right" colspan="2">
                        <a href="index.php" class="btn btn-success"></i> Kembali</a>
                        </td>
                    </tr>
                </table>
        </div>
    </div>
</div>