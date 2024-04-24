<?php 
session_start();
 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$data = mysqli_query($koneksi,"SELECT * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);
// $dd = $row = $data->fetch_row();

if($cek > 0){

	$dd = mysqli_fetch_assoc($data);

	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	$_SESSION['role']	= $dd['role'];

	if ($dd['role'] == 1) {
		header("location:home.php");
	}else{
		header("location:kasir.php");
	}
	
}else{
	header("location:index.php?pesan=gagal");
}
?>