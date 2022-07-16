<?php
include '../koneksi.php';

$sql = "SELECT * FROM pegawai ORDER BY nama_pegawai";
$res = mysqli_query($koneksi, $sql);
$pegawai = array();

while ($data = mysqli_fetch_assoc($res)){
    $pegawai[] = $data;
}

include '../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
            
            <div class="card">
                <div class="card-header">
                    <h2 class="card-tittle"><i class="fas fa-user"></i> Data Pegawai</h2>
            </div>
            <div class="card-body">
            <a class="btn btn-primary mb-2" href="tambah.php">
            <i class="fas fa-plus"></i> Tambah Pegawai</a>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Telp.</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                   <?php
                    $no = 1;
                    foreach ($pegawai as $p) { ?>

                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $p['nama_pegawai'] ?></td>
                        <td><?= $p['alamat'] ?></td>
                        <td><?= $p['telp'] ?></td>
                        <td>
                        <a href="detail.php?id_pegawai=<?= $p['id_pegawai'] ?>" class="badge badge-success">Detail</a>
                        <a href="edit.php?id_pegawai=<?= $p['id_pegawai'] ?>" class="badge badge-warning">Edit</a>
                        <a href="hapus.php?id_pegawai=<?= $p['id_pegawai'] ?>" class="badge badge-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Pegawai?')">Hapus</a>
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