<?php

require "db.php";

  if( isset($_POST["register"]) ) {

    if (register($_POST) > 0) {
        echo
          "<script>
                alert('User successfully registered');
            </script>";
    } else {
        echo mysqli_error($conn);
    }

  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar Akun</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<style>
    body {
  background: url(image/kucing.jpg) no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;}
  </style>
<body>
	<!-- Navbar -->
	<?php include 'navbar.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Daftar Pelanggan</h3>
					</div>
					<div class="panel-body">
						<form method="POST" class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-md-3">Nama</label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="nama" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">email</label>
								<div class="col-md-7">
									<input type="email" class="form-control" name="email" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Password</label>
								<div class="col-md-7">
									<input type="password" class="form-control" maxlength="15" minlength="7" name="password" required>
									<p class="text-info">Maksimal Panjang Password 7 - 15 kata</p>
								</div>
							</div>
							<div class=" form-group">
								<label class="control-label col-md-3">Telp/HP</label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="telepon" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-7 col-md-offset-3">
									<button class="btn btn-primary" name="daftar">Daftar</button>
								</div>
							</div>
                            <div class="container">
                            <button type="button" class="cancelbtn" onclick="window.location.href='index.php'">Back</button>
								</div>
							</div>
						</form>
						<?php
						//jika tekan tombol dartar maka
						if (isset($_POST["daftar"])) {
							//mengambil isian dari nama telp dll
							$nama = $_POST["nama"];
							$email = $_POST["email"];
							$password = $_POST["password"];
							$telepon = $_POST["telepon"];

							//cek email sudah digunakan
							$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email'");
							//mengatuhi komputer ada dan tidak ada dengan cara diitung
							$yangcocok = $ambil->num_rows;
							if ($yangcocok == 1) {
								echo "<script>alert('Pendaftaran Gagal, email sudah digunakan');</script>";
								echo "<script>location='daftar.php';</script>";
							} else {
								//query insert pelanggan
								$koneksi->query("INSERT INTO pelanggan (email_pelanggan,password_pelanggan,nama_pelanggan,telepon_pelanggan) VALUES ('$email','$password','$nama','$telepon')");
								echo "<script>alert('Pendaftaran Succes, Silahkan Login');</script>";
								echo "<script>location='login.php';</script>";
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

</html>
