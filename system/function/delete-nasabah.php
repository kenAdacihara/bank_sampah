<?php
 require_once("../config/koneksi.php");
 $id = $_GET['id'];
 $query = "DELETE FROM nasabah WHERE nin = '$id'";
 $queryact = mysqli_query($conn, $query);
 echo "<meta http-equiv='refresh'
      content='0; url=http://localhost:8080/bank-sampah/page/admin.php?page=data-nasabah-full'>";
?>