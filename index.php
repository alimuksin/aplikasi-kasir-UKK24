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
<body class="container">
    <div class="row justify-content-center" style="padding-top: 120px;">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-center">Halaman Login</h5>
                </div>
                <div class="card-body">

                    <?php 
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == 'gagal') {
                            echo '<div class="alert alert-danger">Login Gagal, Cek kembali username dan password anda</div>';
                        }
                    }
                    ?>

                    <form method="POST" action="aksi-login.php">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" placeholder="Masukan Username" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" placeholder="Masukan Password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
  </body>
</html>

<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>