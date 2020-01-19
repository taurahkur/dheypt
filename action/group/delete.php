<?php
$conn = new mysqli("localhost","root","","dheypt");
$sql = "DELETE FROM master_group WHERE id_group ='".$_GET["id"]."'";
   // $sql = 'DELETE FROM master_group WHERE id_group = ".."';$_GET["id"]';
   if (mysqli_query($conn, $sql)) {
      header("Location: ../../group.php");
   } else {
      echo "Error deleting record: " . mysqli_error($conn);
   }
   mysqli_close($conn);
 ?>