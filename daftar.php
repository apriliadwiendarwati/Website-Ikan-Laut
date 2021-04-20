<?php
include("konek.php");
if(isset($_POST['kirim'])){
	//ambil data di database
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];
	$kesan = $_POST['kesan'];

	$sql = "INSERT INTO  tabel_komentar (nama, email, pesan, kesan) VALUE ('$nama', '$email', '$pesan','$kesan')";
	$query = mysqli_query($db, $sql);

	if($query){

		 header('Location: index.html');
	}else{
		echo 'gagal';
	}
}else{
	die("Akses Ditolak");

}

?>