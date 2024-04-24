<?php  include "_header.php"; 
$dd = $_GET['penjualan_id'];
include 'koneksi.php';
    $data = mysqli_query($koneksi, "SELECT * FROM penjualan 
    -- join tabel penjual dengan pelanggan
    JOIN pelanggan ON pelanggan.pelanggan_id = penjualan.pelanggan_id 

    -- join tabel penjual dengan detail_penjualan
    JOIN detail_penjualan ON detail_penjualan.penjualan_id = penjualan.penjualan_id

    -- join tabel produk dengan detail_penjualan
    JOIN produk ON produk.produk_id = detail_penjualan.produk_id 

    -- mengambil kondisi id penjulan sesuai yang di url
    WHERE penjualan.penjualan_id = $dd
    ");
    
    $detail = mysqli_fetch_assoc($data);

?>
<div class="card mt-3">
    <div class="card-header">
        <h5>DETAIL PENJUALAN</h5>
        <a href="penjualan.php" class="btn btn-danger btn-sm">Kembali</a>
    </div>
    <div class="card-body">
        
        <table class="">
            <tr>
                <td width="30%">Tanggal</td>
                <td width="1px">:</td>
                <td ><?= $detail['tanggal'] ?></td>
            </tr>
            <tr>
                <td>Nama Pelanggan</td>
                <td>:</td>
                <td ><?= $detail['nama_pelanggan'] ?></td>
            </tr>
            <tr>
                <td>Total belanja</td>
                <td>:</td>
                <td ><?= $detail['total_harga'] ?></td>
            </tr>
            <tr>
                <td>Status Bayar</td>
                <td>:</td>
                <td ><?= $detail['status_bayar'] ?></td>
            </tr>
        </table>

        <h6 class="mt-4">List Produk</h6>
        <table class="table table-bordered">
            <tr>
                <th>Nama Produk</th>
                <th >Harga/pcs</th>
                <th>QTY</th>
            </tr>
            <tr>
                <td ><?= $detail['nama_produk'] ?></td>
                <td ><?= $detail['harga'] ?></td>
                <td ><?= $detail['qty'] ?></td>
            </tr>
        </table>

    </div>
</div>
<?php include "_footer.php"; ?>