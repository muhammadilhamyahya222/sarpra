<?php 

include '../koneksi.php';
include '../aset/header.php';

include 'fungsi-transaksi.php';

$id_pinjam = $_GET['id_pinjam'];

$pinjam = ambilPeminjaman($koneksi, $id_pinjam);

?>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                    
                        <form action="proses-edit.php" method="post">
                            <div class="form-group">
                                <label for="pegawai">Nama Pegawai</label>
                                <input type="text" value="<?= $pinjam['nama_pegawai'] ?>" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="barang">Nama Barang</label>
                                <input type="text" value="<?= $pinjam['nama'] ?>" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="datepicker">Tanggal Pinjam</label>
                                <input type="date" name="tgl_pinjam" value="<?= $pinjam['tgl_pinjam'] ?>" class="form-control">
                            </div>
                            <?php 
                                if($pinjam['status'] == "Kembali")
                                { ?>
                            <div class="form-group">
                                <label for="datepicker">Tanggal Kembali</label>
                                <input type="date" name="tgl_kembali" value="<?= $pinjam['tgl_kembali'] ?>" class="form-control" disabled>
                            </div>
                            <?php
                                }
                            ?>
                            <div class="form-group">
                                <input type="hidden" name="id_pinjam" value="<?= $id_pinjam ?>">
                                <button type="submit" name="btnPinjam" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 

include '../aset/footer.php';

?>