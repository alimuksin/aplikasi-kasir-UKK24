<?php  include "_header.php"; ?>
<div class="card mt-3">
    <div class="card-header">
        <h5>TAMBAH PENJUALAN</h5>
        <a href="penjualan.php" class="btn btn-danger btn-sm">KEMBALI</a>
    </div>
    <div class="card-body">
        <form method="POST" action="simpandata.php">
            <div class="form-group">
                <label>Tanggal</label>
                <input type="datetime" class="form-control" name="tanggal" value="<?= date('Y-m-d H:i:s') ?>">
            </div>
            <div class="form-group">
                <label>Nama Pelanggan</label>
                <select class="form-control" name="pengguna_id" required>
                    <option value="">Pilih Pelanggan</option>
                    <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "SELECT * FROM pelanggan");
                        foreach ($data as $p) {
                    ?>
                        <option value="<?= $p['pelanggan_id'] ?>">
                            <?= $p['nama_pelanggan'] ?> (<?= $p['alamat'] ?>)
                        </option>
                    <?php } ?>
                </select>
            </div>            
            <div class="row">
                <div class="form-group col-md-6 ">
                    <label>Nama Produk</label>
                    <select class="form-control" name="produk_id" required>
                        <option value="">Pilih Produk</option>
                        <?php
                            include 'koneksi.php';
                            $data = mysqli_query($koneksi, "SELECT * FROM produk");
                            foreach ($data as $p) {
                        ?>
                            <option value="<?= $p['produk_id'] ?>">
                                <?= $p['nama_produk'] ?> (<?= $p['harga'] ?>)
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group col-md-6 ">
                    <label>Jumlah Produk</label>
                    <input type="number" class="form-control" name="qty" minlength="1" value="1" required>
                </div>
            </div>
            <div class="form-group">
                <label>Status Bayar</label>
                <select class="form-control" name="status" required>
                    <option value="LUNAS">LUNAS</option>
                    <option value="BELUM LUNAS">BELUM LUNAS</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>
    </div>
</div>


<?php include "_footer.php"; ?>
