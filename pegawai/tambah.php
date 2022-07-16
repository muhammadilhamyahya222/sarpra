<?php
include '../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Tambah Data Pegawai</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="proses-tambah.php">
                    <div class="form-group">
                        <label for="nama_pegawai">Nama Pegawai</label>
                        <input type="text" class="form-control" name="nama_pegawai" id="pegawai" placeholder="Masukkan Nama Pegawai">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat">
                    </div>
                    <div class="form-group">
                        <label for="telp">No. Telepon</label>
                        <input type="text" class="form-control" name="telp" id="telp" placeholder="Masukkan No. Telp">
                        <small class="form-text text-muted">Contoh: 111-222-3333</small>
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