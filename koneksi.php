<?php 
$koneksi = mysqli_connect( "localhost", "root", "", "kasirapp");
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : ".mysqli_connect_errno();
}
?>