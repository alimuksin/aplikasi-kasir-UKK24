<?php  include "_header.php"; ?>
<div class="card mt-3">
    <div class="card-header">
        <h5>DATA PRODUK</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Role ID</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'koneksi.php';
                    $no = 1; //untuk membuat no urut data
                    $data = mysqli_query($koneksi, "SELECT * FROM user");
                    foreach ($data as $p) {
                ?>
                    <tr>
                        <th scope="row">
                            <?= $no++ ?>
                        </th>
                        <td><?= $p['username'] ?></td>
                        <td><?= $p['nama_lengkap'] ?></td>
                        <td><?= $p['role'] ?></td>
                        <td>
                            <a href="edit-produk.php?id=<?=$p['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="hapus-produk.php?id=<?=$p['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "_footer.php"; ?>