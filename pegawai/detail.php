<?php 

include '../aset/header.php';
include '../koneksi.php';

$id_pegawai = $_GET['id_pegawai'];

$sql = "SELECT * FROM pegawai WHERE id_pegawai = $id_pegawai";

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
            <h2>Detail Pegawai</h2>
            <hr class="bg-light">
                <table class="table table-bordered">
                    <tr>
                        <td><strong>Nama Pegawai</strong></td>
                        <td><?= $detail['nama_pegawai'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Alamat</strong></td>
                        <td>
                        <?= $detail['alamat'] ?>
                        </td>
                    </tr>

                    <tr>
                        <td><strong>No. Telp</strong></td>
                        <td><?= $detail['telp'] ?></td>
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