<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "web";

$db = mysqli_connect($server, $user, $password, $database);

if(!$db){
	die("Gagal menyambungkan : ". mysqli_connect_error());
}

?>