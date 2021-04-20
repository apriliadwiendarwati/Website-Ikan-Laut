<?php

include("konek.php");
if(isset($_POST['simpan'])){

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];
	$kesan = $_POST['kesan'];

	$sql = "UPDATE tabel_komentar SET nama='$nama', email='$email', pesan='$pesan', kesan='$kesan' WHERE id=$id ";
	$query = mysqli_query($db, $sql);

	if ($query) {
	     header('Location: tentang-saya.php');
	} else {
		die ( 'gagal');

	}


}else{
	die("akses dilarang");
}

?>