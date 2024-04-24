<?php 
session_start(); 
include 'koneksi.php';

$tanggal 		= $_POST['tanggal'];
$pengguna_id 	= $_POST['pengguna_id'];
$produk_id 		= $_POST['produk_id'];
$qty 			= $_POST['qty'];
$status 		= $_POST['status'];

$ambildataproduk = mysqli_query($koneksi,"SELECT * from produk where produk_id='$produk_id'");
$dataproduk = mysqli_fetch_assoc($ambildataproduk);
$subtotal = $dataproduk['harga']*$qty;
$totalharga = $subtotal;

mysqli_query($koneksi,"INSERT into penjualan values('','$tanggal','$totalharga','$pengguna_id', '$status')");
$last_id = $koneksi->insert_id;

mysqli_query($koneksi,"INSERT into detail_penjualan values('','$last_id','$produk_id','$qty', '$subtotal')");

header("location:penjualan.php");
?>