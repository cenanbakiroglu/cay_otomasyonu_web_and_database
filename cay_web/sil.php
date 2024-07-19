<?php
include("baglanti.php");
$sql="DELETE FROM sepet WHERE id=$_GET[id]";
$sorgu=mysqli_query($bagno,$sql);
header("Location:index.php?cay=sepet");
?>