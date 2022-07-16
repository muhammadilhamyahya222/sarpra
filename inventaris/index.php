<?php
include '../koneksi.php';

$sql = "SELECT * FROM inventaris ORDER BY nama";
$res = mysqli_query($koneksi, $sql);
$inventaris = array();

while ($data = mysqli_fetch_assoc($res)){
    $inventaris[] = $data;
}

include '../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
            
            <div class="card">
                <div class="card-header">
                    <h2 class="card-tittle"><i class="fas fa-book"></i> Data Inventaris</h2>
            </div>
            <div class="card-body">
            <a class="btn btn-primary mb-2" href="tambah.php">
            <i class="fas fa-plus"></i> Tambah Inventaris</a>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                   <?php
                    $no = 1;
                    foreach ($inventaris as $i) { ?>

                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $i['nama'] ?></td>
                        <td><?= $i['deskripsi'] ?></td>
                        <td><?= $i['stok'] ?></td>
                        <td>
                        <a href="detail.php?id_inventaris=<?= $i['id_inventaris'] ?>" class="badge badge-success">Detail</a>
                        <a href="edit.php?id_inventaris=<?= $i['id_inventaris'] ?>" class="badge badge-warning">Edit</a>
                        <a href="hapus.php?id_inventaris=<?= $i['id_inventaris'] ?>" class="badge badge-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Inventaris?')">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                </table>
            </div>
</div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>