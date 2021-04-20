<?php
include("konek.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Penyu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                Web Saya
            </div>
        </header>
        <nav>
             <ul>
                <li><a href="index.html">Beranda</a></li>
                <li><a href="kontak-saya.html">Kontak Saya</a></li>
                <li><a href="tentang-saya.php">Halaman Admin</a></li>
                <li><a href="masukan.php">Masukan</a></li>
                
             </ul>
         </nav>
       <article>
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
        <input name="pesan" type="text" class="form-control" id="inputAddress" placeholder="ketikkan sesuatu">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Kesan</label>
        <input name="kesan" type="text" class="form-control" id="inputAddress" placeholder="ketikkan sesuatu">
      </div>
         
      <div class="col-12">
        <button name="kirim" type="submit" class="btn btn-primary">Kirim</button>
      </div>
    </form>
        </div>
            
         </article>
  
       <footer>
        Aprilia Dwi Endarwati web-saya.com
       </footer>
    </div>
</body>
</html>