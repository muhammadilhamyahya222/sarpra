<?php 

include '../koneksi.php';
include 'fungsi-transaksi.php';

$inventaris = ambilInventaris($koneksi);

$pegawai = ambilPegawai($koneksi);

include '../aset/header.php';

?> 
<div class="pagewrap-overlay"></div>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Form Peminjaman</h3>
                </div>
                <div class="card-body">
                    <form action="proses-pinjam.php" method="post">
                    
                        <div class="form-group">
                            <label for="pegawai">Nama Pegawai</label>
                            <select name="id_pegawai" class="form-control">
                            <?php 
                                foreach ($pegawai as $a) { ?>
                                    <option value="<?= $a['id_pegawai'] ?>"><?= $a['nama_pegawai'] ?></option>
                            <?php        
                            }
                            ?>                            
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Barang</label>
                            <select name="id_inventaris" class="form-control">
                                <?php
                                foreach ($inventaris as $b) { ?>
                                    <option value="<?= $b['id_inventaris']?>"> <?= $b['nama'] ?></option>
                            <?php        
                            }
                            ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="datepicker">Tanggal Pinjam</label>
                            <input type="date" name="tgl_pinjam" class="form-control">                        
                        </div>

                        <div class="form-group">
                            <button type="submit" name="btnPinjam" class="btn btn-primary mr-auto">Simpan</button>
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