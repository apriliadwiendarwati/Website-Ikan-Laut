
<?php
include("konek.php");
?>


<!DOCTYPE html>
<html>
<head>
    <style>
        a{
            text-decoration: none;
        }
        </style>
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
        <div class="container">
            <table class="table caption-top">
          <caption>List of users</caption>
          <thead class="table-success">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Pesan</th>
              <th scope="col">kesan</th>
               <th scope="col">Tindakan</th>
            </tr>
          </thead>
          <tbody>
          
            <?php
            $sql= "SELECT * FROM tabel_komentar";
            $query= mysqli_query($db, $sql);
            $no=1;
        
            while ($komen= mysqli_fetch_array($query)){
                echo "<tr>";
        
                echo "<td>".$no++. "</td>";
                echo "<td>".$komen['nama']."</td>";
                echo "<td>".$komen['email']."</td>";
                echo "<td>".$komen['pesan']."</td>";
              echo "<td>".$komen['kesan']."</td>";
        
                echo "<td>";
                echo "<a href='list_edit.php?id=".$komen['id']. " '>edit</a> | ";
                echo "<a href='hapus.php?id=".$komen['id']. " '>hapus</a> | ";
                echo "</td>";
                echo "</tr>";
        
            }
            ?>
            </tbody>
           </table>
        
        </div>
            <center><p>Total : <?php echo mysqli_num_rows($query) ?></p></center>
        </div>
        
        </div>
            
         </article>
  
       <footer>
        Aprilia Dwi Endarwati web-saya.com
       </footer>
    </div>
</body>
</html>