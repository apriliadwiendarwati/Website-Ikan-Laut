<?php
include("konek.php");

if ( !isset($_GET['id'])){
	header('location: index.php');
}

$id = $_GET['id'];

$sql= "SELECT * FROM tabel_komentar WHERE id=$id";
$query= mysqli_query($db, $sql);
$komen= mysqli_fetch_assoc($query);


if (mysqli_num_rows($query) < 1) {
die("Data Tidak ada");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form koment</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container" >
		<form class="row g-3" method="POST" action="proses_edit.php">
			<input type="hidden" name="id" value="<?php echo $komen['id']?>"/>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nama</label>
    <input  name="nama" type="text" class="form-control" id="inputEmail4" value="<?php echo $komen['nama']?>"/>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input name="email" type="Email" class="form-control" id="inputPassword4" value="<?php echo $komen['email']?>"/>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Pesan</label>
    <input name="pesan" type="text" class="form-control" id="inputAddress" placeholder="Ketikkan Sesuatu" value="<?php echo $komen['pesan']?>"/>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Kesan</label>
    <input name="kesan" type="text" class="form-control" id="inputAddress" placeholder="Ketikkan Sesuatu" value="<?php echo $komen['kesan']?>"/>
  </div>
     
  <div class="col-12">
    <button name="simpan" type="submit" class="btn btn-primary">Kirim</button>
  </div>
</form>
	</div>
</body>
</html>

