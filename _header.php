<?php 
    session_start();    
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Nama Web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar">
			<div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <h1><a href="index.html" class="logo">KASIR APP</a></h1>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="home.php"><span class="fa fa-home mr-3"></span> HOME</a>
                </li>
                <li>
                    <a href="penjualan.php"><span class="fa fa-list mr-3"></span> Data Penjualan</a>
                </li>
                <li>
                    <a href="pelanggan.php"><span class="fa fa-users mr-3"></span> Pelanggan</a>
                </li>
                <li>
                    <a href="produk.php"><span class="fa fa-calendar mr-3"></span> Produk</a>
                </li>
                <li>
                    <a href="pengguna.php"><span class="fa fa-user mr-3"></span> Pengguna</a>
                </li>
                <li>
                    <a href="logout.php"><span class="fa fa-arrow-circle-left mr-3"></span> Logout</a>
                </li>
            </ul>
        </nav>

        <div id="content" class="p-4 p-md-5 pt-5">