<?php  include "_header.php"; ?>
<div class="card mt-3">
    <div class="card-header">
        <h5>DATA PENJUALAN</h5>
        <a href="tambahpenjualan.php" class="btn btn-primary btn-sm">Tambah</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Total Harga</th>
                  <th scope="col">Pelanggan</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'koneksi.php';
                    $no = 1; //untuk membuat no urut data
                    $data = mysqli_query($koneksi, "SELECT * FROM penjualan JOIN pelanggan ON pelanggan.pelanggan_id = penjualan.pelanggan_id");
                    foreach ($data as $p) {
                ?>
                    <tr>
                        <th scope="row">
                            <?= $no++ ?>
                        </th>
                        <td><?= $p['tanggal'] ?></td>
                        <td><?= $p['total_harga'] ?></td>
                        <td><?= $p['nama_pelanggan'] ?></td>
                        <td><?= $p['status_bayar'] ?></td>
                        <td>
                            <a href="detail-penjualan.php?penjualan_id=<?=$p['penjualan_id'] ?>" class="btn btn-primary btn-sm">Detail</a>
                            <a href="edit-penjualan.php?penjualan_id=<?=$p['penjualan_id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="hapus-penjualan.php?penjualan_id=<?=$p['penjualan_id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<?php include "_footer.php"; ?>