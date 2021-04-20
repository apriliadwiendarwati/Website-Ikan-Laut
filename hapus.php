<?php

include("konek.php");

if(isset($_GET['id'])){

	$id=$_GET['id'];

	$sql="DELETE FROM tabel_komentar WHERE id=$id";
	$query=mysqli_query($db, $sql);

	if($query){

		header('Location: tentang-saya.php');

	}else{
		die("Data tidak ada");
	}
}else{
	echo 'data tidak ada';
}



?>