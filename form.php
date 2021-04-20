<?php
include("konek.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pesan dan Kesan</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container" >
		<form class="row g-3" method="POST" action="daftar.php">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nama</label>
    <input  name="nama" type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input name="email" type="Email" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Pesan</label>
    <input name="pesan" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Kesan</label>
    <input name="kesan" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
     
  <div class="col-12">
    <button name="kirim" type="submit" class="btn btn-primary">Kirim</button>
  </div>
</form>
	</div>
</body>
</html>