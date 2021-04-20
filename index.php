<?php
include("konek.php");
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<center>List Pelanggan</center>
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

</body>
</html>

  </tbody>
</table>
</div>

</body>
</html>